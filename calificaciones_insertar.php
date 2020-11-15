<?php
use Illuminate\Database\Capsule\Manager as DB;

echo <<<_PAGPRINCIPAL
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal Escuela</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="diseños/pagprincipal.css">
    <style>
        body{
            background-image: url("Imagenes/fondoescuela.png");
            background-size: cover;
        }

        .encabezado{
            background-image: url("Imagenes/fondoescuela.png");
            background-size: cover;
        }
    </style>
</head>
<body>
    <header class="encabezado">
        <div class="columns">
            <div class="column">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="Imagenes/Logoprimitivo.png">
                </figure>
            </div>
            <div class="column" id="titulohead">
              ESCUELA PRIMITIVO ALONSO IMEE CAMPESTREE
            </div>
            <div class="column">
              </div>
        </div>
    </header>
    
    <br>
    <h1 id="titulo">BIENVENIDO A LA PÁGINA DE LA ESCUELA PRIMITIVO ALONSO IMEE CAMPESTREE</h1>
    <br>
_PAGPRINCIPAL;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table('calificaciones')->insert([
    'asignatura_1' => $_POST["asignatura1"],
    'calificacion_1' => $_POST["calificacion1"],
    'asignatura_2' => $_POST["asignatura2"],
    'calificacion_2' => $_POST["calificacion2"],
    'asignatura_3' => $_POST["asignatura3"],
    'calificacion_3' => $_POST["calificacion3"]
]);
echo "<h1 class='subtitulos'>Las calificaciones fueron subidas con exito</h1>
<button class='button is-dark'><a href='pagprofesor.html'>Regresar</a></button>";


echo <<<_PAGPRINCIPAL
    <br>
    <br>
    <figure class="image is-180x180" id="Imagen">
        <img src="Imagenes/primitivo.png">
    </figure>
    <br>
      
</body>
</html>
_PAGPRINCIPAL;