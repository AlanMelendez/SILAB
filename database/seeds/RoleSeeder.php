<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RoleSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name'=> 'Admin']);
        $role2 = Role::create(['name'=> 'Alumno']);
        $role3 = Role::create(['name'=> 'Personal']);
        $role3 = Role::create(['name'=> 'Invitado']);

        //Para tener coherencia, al NOMBRE del permiso le podemos llamar igual que la ruta que va proteger.
        Permission::create(['name'=> 'Prestamos']); //Permiso para acceder al panel prestamo
        Permission::create(['name'=> 'Prestamos.create']); //Permiso para acceder al panel prestamo
        Permission::create(['name'=> 'Prestamos.edit']); 

        Permission::create(['name'=> 'Tramite']); //Permiso para acceder al panel tramite
        Permission::create(['name'=> 'Tramite.create']); //Permiso para acceder al panel tramite
        Permission::create(['name'=> 'prestamosTerminados']); //Permiso para acceder al panel tramite
        Permission::create(['name'=> 'tramitesTerminados']); //Permiso para acceder al panel tramite


        Permission::create(['name'=> 'Liberacion']); // permiso para acceder al panel liberacion
        Permission::create(['name'=> 'Liberacion.create']); // permiso para acceder al panel liberacion
        Permission::create(['name'=> 'comprobantesCancelados']); // permiso para acceder al panel liberacion


        Permission::create(['name'=> 'Articulos_mayores']);
        Permission::create(['name'=> 'Articulos_mayores.create']);
        Permission::create(['name'=> 'Articulos_mayores.edit']);
        Permission::create(['name'=> 'Articulos_mayores.store']);
        Permission::create(['name'=> 'Articulos_mayores.destroy']);


        Permission::create(['name'=> 'Articulos_menores']);
        Permission::create(['name'=> 'Articulos_menores.create']);
        Permission::create(['name'=> 'Articulos_menores.edit']);
        Permission::create(['name'=> 'Articulos_menores.store']);
        Permission::create(['name'=> 'Articulos_menores.destroy']);


    }
}
