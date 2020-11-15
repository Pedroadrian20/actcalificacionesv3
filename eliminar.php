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
_PAGPRINCIPAL;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table('calificaciones')->where('idcalificacion', $_GET['id'])->delete();

echo "<h1 class='subtitulos'>Se ha eliminado la calificacion con el id: {$_GET['id']}</h1>
<br><button class='button is-dark'><a href='consultar_profesor.php'>Regresar</a></button>";
