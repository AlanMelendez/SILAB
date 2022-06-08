<?php

namespace App\Http\Controllers;

use App\articulo_mayor;
use App\articulo_menor;
use App\prestamo;
use App\User;
use App\usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('Alumnos.registros');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        session_start();

        // ---------------------------- Saber que usuario/personal esta logeado ----------------------------------------------
        //Obtenemos las credenciales del ususario loggeado, De esta manera mostramos los articulos dependiendo del laboratorio que tenga asignado.
        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.

        $laboratorista = DB::table('laboratorios')
            ->join('personals', 'personals.id', '=', 'laboratorios.id_personal') //Buscamos personal encargado de laboratorio
            ->join('users', 'users.id', '=', 'personals.id_usuario') //Obteniendo el personal , buscamos el id de usuario que tiene.
            ->select('users.name', 'personals.descripcion_puesto', 'personals.numero_checador', 'laboratorios.nombre_laboratorio', 'laboratorios.id')
            ->where('users.id', $id_user_loged) //Si el id del usuario loggedado, Y existe registro en la BD de ese id, Que me muestre todo lo del select.
            ->get();
        /*
                        Resultado:
                        [{"name":"Alan","descripcion_puesto":"Docente","numero_checador":192310781,"nombre_laboratorio":"Computo","id":1}]

                        Para leer un solo dato:
                        $laboratorista[0]->name
                        $laboratorista[0]->descripcion_puesto
                        etc...
                */

        //-------------Para buscar el numero de control y poder agregar ese prestamo.-------------------------------

        $numeroControl = trim($request->get('search_control')); //Obtenemos el numero control del input.
        $usuarios = DB::table('alumnos')
            ->join('users', 'users.id', '=', 'alumnos.id') //users es la tabla, no el modelo
            ->select('alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control', 'users.name')
            ->where('alumnos.numero_control', 'LIKE', '%' . $numeroControl . '%')
            ->get();


        //Guardamos el numero de control en session para que no se borre al recargar.
        $numero_control_sesion = $_SESSION["numero_contro"] = $usuarios;


        /*--------------------------Mostrar articulos de laboratorio segun el docente-----------------------------*/
        $articulosme = DB::table('articulo_menor_laboratorios')
            ->join('articulo_menors', 'articulo_menors.id', '=', 'articulo_menor_laboratorios.id_articulo_menor') //Verificamos que el id de un articulo laboratorio, exista en la tabla articulos generales.
            ->join('laboratorios', 'laboratorios.id', '=', 'articulo_menor_laboratorios.id_laboratorio') //Buscamos que existan coincidencias de laboratorio
            ->select('articulo_menors.*') //Que nos seleccione todos los articulos menores
            ->where('laboratorios.id', $laboratorista[0]->id) //Pero solo los de el laboratorio que tiene el usuario loggeado.
            ->get();

        $articulosma =  DB::table('articulo_mayor_laboratorios')
            ->join('articulo_mayors', 'articulo_mayors.id', '=', 'articulo_mayor_laboratorios.id_articulo_mayor') //Verificamos que el id de un articulo laboratorio, exista en la tabla articulos generales.
            ->join('laboratorios', 'laboratorios.id', '=', 'articulo_mayor_laboratorios.id_laboratorio') //Buscamos que existan coincidencias de laboratorio
            ->select('articulo_mayors.*') //Que nos seleccione todos los articulos mayores
            ->where('laboratorios.id', $laboratorista[0]->id) //Pero solo los de el laboratorio que tiene el usuario loggeado.
            ->get();


        /* --------------------------------BUSCAR ARTICULOS DESDE LA BARRA ------------------------------------- */
        // Ahora obtenemos el dato que esta buscando el input
        // $articulo_search = $request->get('search_articles'); //Obtenemos el valor que se esta digitando en el input.


        // //Validamos que exista un registro:

        // $mayores =  DB::table('articulo_mayors')
        //     ->select('articulo_mayors.clave_producto', 'articulo_mayors.nombre', 'articulo_mayors.descripcion_articulo') //Que nos seleccione todos los articulos mayores
        //     ->where('articulo_mayors.clave_producto', $articulo_search) //Pero solo los de el laboratorio que tiene el usuario loggeado.
        //     ->get();


        // $menores = DB::table('articulo_menors')
        //     ->select('articulo_menors.nombre', 'articulo_menors.descripcion_articulo', 'articulo_menors.clave_producto') //Que nos seleccione todos los articulos mayores
        //     ->where('articulo_menors.clave_producto', $articulo_search) //Pero solo los de el laboratorio que tiene el usuario loggeado.
        //     ->get();


        //return( $articulo_devolver );
        return view('Components.nuevo-prestamo-individual', compact('numeroControl', 'usuarios', 'articulosme', 'articulosma', 'numero_control_sesion'));
    }
    public function mostrarNumeroControl(Request $request)
    {
        session_start();

        $numeroControl = trim($request->get('search_control')); //Obtenemos el numero control del input.


        //Guardamos el numero de control en session para que no se borre al recargar.
        
       
        
        $usuarios = DB::table('alumnos')
        ->join('users', 'users.id', '=', 'alumnos.id_usuario') //users es la tabla, no el modelo
        ->select('alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control', 'users.name', 'alumnos.id')
        ->where('alumnos.numero_control', $numeroControl )
        ->get();
        $numero_control_sesion = $_SESSION["numero_contro"] = $usuarios;
        $numero_control_desde_sesion = json_encode($_SESSION["numero_contro"]); //Nos traemos el numero de control que capturamos en la sesion
        $controlStr = json_decode($numero_control_desde_sesion);

        if (DB::table('prestamos')->where([
            ['prestamos.id_alumno', '=', $usuarios[0]->id],
            ['prestamos.status', '=', '1'],
        ])->exists()) {

            // var_dump('no agregare, ya existe registro con ese id, y status1');
            return (response(500)->header('Content-type', 'text/plain'));
            
        } else {
            
           
            return (response(json_encode($numero_control_sesion), 200)->header('Content-type', 'text/plain')); //[{"nombre":"jeje","descripcion_articulo":"jeje","clave_producto":"22313123"}]

        }
    }
    public function mostrarArticulos(Request $request)
    {
        session_start();


        // Ahora obtenemos el dato que esta buscando el input
        $articulo_search = $request->get('search_articles'); //Obtenemos el valor que se esta digitando en el input.
        $mayores =  DB::table('articulo_mayors')
            ->select('articulo_mayors.clave_producto', 'articulo_mayors.nombre', 'articulo_mayors.descripcion_articulo', 'articulo_mayors.tipo') //Que nos seleccione todos los articulos mayores
            ->where('articulo_mayors.clave_producto', $articulo_search) //Pero solo los de el laboratorio que tiene el usuario loggeado.
            ->get();


        $menores = DB::table('articulo_menors')
            ->select('articulo_menors.nombre', 'articulo_menors.descripcion_articulo', 'articulo_menors.clave_producto', 'articulo_menors.tipo') //Que nos seleccione todos los articulos mayores
            ->where('articulo_menors.clave_producto', $articulo_search) //Pero solo los de el laboratorio que tiene el usuario loggeado.
            ->get();

        //validamos articulos mayores y menores y retornamos.
        if (DB::table('articulo_mayors')->where('articulo_mayors.clave_producto', $articulo_search)->exists()) {

            return (response(json_encode($mayores), 200)->header('Content-type', 'text/plain'));
        }
        if (DB::table('articulo_menors')->where('articulo_menors.clave_producto', $articulo_search)->exists()) {
            return (response(json_encode($menores), 200)->header('Content-type', 'text/plain'));
        }
    }
    public function crearPrestamo(Request $request)
    {
        session_start();

        //$data=json_decode($_POST['array']);


        $numero_control_desde_sesion = json_encode($_SESSION["numero_contro"]); //Nos traemos el numero de control que capturamos en la sesion
        $controlStr = json_decode($numero_control_desde_sesion);
        //return $controlStr[0]->id; //[{"semestre":5,"carrera":"Informatica","numero_control":192310781,"name":"Alan Cuevas"}]

        $fecha = date('Y-m-d  H:i:s');

        if (DB::table('prestamos')->where([
            ['prestamos.id_alumno', '=', $controlStr[0]->id],
            ['prestamos.status', '=', '1'],
        ])->exists()) {

            var_dump('no agregare, ya existe registro con ese id, y status1');
        } else {
            $prestamo_alumno = new prestamo();
            $prestamo_alumno->fecha = $fecha;
            $prestamo_alumno->status = 1;
            $prestamo_alumno->id_alumno = $controlStr[0]->id;
            $prestamo_alumno->save(); //Guardamos los datos
            var_dump('Se agrego el registro bb');
        }


        //return redirect()->route("Articulos_mayores.index")->with('success','Agregado con exito'); //Redirigimos ala pagina index, Y catcheamos cualquier errot con with.

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Aqui leemos el id , que el id podria ser el de un alumno, y leer todos los registros de un alumno
        return view('Alumnos.prestamos');
        print_r('hola');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
