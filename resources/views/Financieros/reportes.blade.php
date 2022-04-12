@extends('adminlte::page')

@section('title', 'SILAB')

@section('content_header')
    <h1>SILAB</h1>
@stop

@section('content')






<html lang="es">
	<head> 
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="css/estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h3>Bienvenido al apartado de Estadisticas</h3>
			</div>
		</header>

<form class="form-inline"  method="post"  name="formFechas" id="formFechas">
    <div class="col-xs-10 col-xs-offset-3">
        <div class="form-group">
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" class="form-control" name="fecha_inicio" required>
        </div>
        <div class="form-group">
            <label for="fecha_final">Fecha Final:</label>
            <input type="date" class="form-control" name="fecha_final" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <button type="button" class="btn btn-primary">Generar Reporte</button>
        </div>
    </div>
</form>

<br><br><br>

<section id="tabla_resultado">
<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
</section>

        
</body>
</html>


<script type="text/javascript">
 
    $('Formfechas').submit(function(e){

        e.preventDefault();

        var form = $($this);
        var url = form.attr('action');

        $.ajax(
        {
            type: "POST",
            url: 'fechas.php',
            data: form.serialize(),
            success: function(data)
            {
                $('#tabla_resultado').html('');
                $('#tabla_resultado').append(data); 
            }
        });
    }); 

</script>



<div class="d-grid gap-2">

<div class="d-grid gap-2">
<button class="btn btn-primary" type="button">GENERAR REPORTE EGRESADO</button> <button class="btn btn-primary" type="button">GENERAR REPORTE BAJA DEFINITIVA</button> <button class="btn btn-primary" type="button">GENERAR REPORTE BAJA TEMPORAL</button>
<div class="d-grid gap-2">
</div>






        <h2 class="saludo"> </h2>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        
        <!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">
        #container {
            height: 420px;
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 360px;
            max-width: 820px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

		</style>
	</head>
	<body>
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/series-label.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<script src="../../code/modules/accessibility.js"></script>
<script src="../../code/themes/high-contrast-light.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description"></p>
</figure>



		<script type="text/javascript">
var colors = Highcharts.getOptions().colors;

Highcharts.chart('container', {
    chart: {
        type: 'spline'
    },

    legend: {
        symbolWidth: 40
    },

    title: {
        text: 'Estadisticas'
    },

    subtitle: {
        text: '-Bajas Temporales - Bajas Definitivas - Egresos '
    },

    yAxis: {
        title: {
            text: 'Alumnos'
        },
        accessibility: {
            description: 'Alumnos'
        }
    },

    xAxis: {
        title: {
            text: 'Meses'
        },
        accessibility: {
            description: '2022'
        },
        categories: ['Enero 2022', 'Febrero 2022', 'Marzo 2022', 'Abril 2022', 'Mayo 2022', 'Junio 2022']
    },

    tooltip: {
        valueSuffix: '%'
    },

    plotOptions: {
        series: {
            point: {
                events: {
                    click: function () {
                        window.location.href = this.series.options.website;
                    }
                }
            },
            cursor: 'pointer'
        }
    },

    series: [
        {
            name: 'Bajas Temporales',
            data: [200, 200, 100, 350, 50, 1020],
            color: colors[2],
            accessibility: {
                description: 'Estos son los alumnos que se dieron de baja temporal en lo que va del año'
            }
        }, {
            name: 'Bajas Definitivas',
            data: [500, 80, 100, 200, 50, 600],
            dashStyle: 'ShortDashDot',
            color: colors[0]
        }, {
            name: 'Egresados',
            data: [200, 0, 0, 1500, 10, 100],
            dashStyle: 'ShortDot',
            color: colors[1]
      
           
        }
    ],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                chart: {
                    spacingLeft: 3,
                    spacingRight: 3
                },
                legend: {
                    itemWidth: 150
                },
                xAxis: {
                    categories: ['Dec. 2010', 'May 2012', 'Jan. 2014', 'July 2015', 'Oct. 2017', 'Sep. 2019'],
                    title: ''
                },
                yAxis: {
                    visible: false
                }
            }
        }]
    }
});

		</script>
	</body>
</html>

    





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 