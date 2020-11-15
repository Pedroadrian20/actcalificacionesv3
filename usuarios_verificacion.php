<?php
use Illuminate\Database\Capsule\Manager as DB;

echo <<<_IDENTIFICACION
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
_IDENTIFICACION;

require 'vendor/autoload.php';
require 'config/database.php';

$user = DB::table('usuarios')
->leftJoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
->where('password_proporcionado', $_POST['password'])->first();

$mensaje = "";

if($user->password_proporcionado == 'profesor_cbtis253'){
    $mensaje = "<h1 class='subtitulos'>Bienvenido: {$user->nombreperfil} {$user->nombre_usuario}</h1>
    <br><p class='subtitulos'>Toque el siguiente boton para poder realizar el registro de las calificaciones:</p>
    <br><button class='button is-dark' id='botones'><a href='pagprofesor.html'>Registrar calificaciones</a></button>";

} else{
    if ($user->password_proporcionado == 'estudiante_cbtis253'){
         $mensaje = "<h1 class='subtitulos'>Bienvenido: {$user->nombreperfil} {$user->nombre_usuario}</h1>
         <br><p class='subtitulos'>Toque el siguiente boton para poder realizar su registro como estudiante</p>
         <br><button class='button is-dark' id='botones'><a href='pagestudiante.html' id='botones'>registrarse como estudiante</a></button>";
    }
} 
echo $mensaje;

echo <<<_IDENTIFICACION
<br>
    <br>
    <figure class="image is-180x180" id="Imagen">
        <img src="Imagenes/primitivo.png">
    </figure>
    <br>

</body>
</html>
_IDENTIFICACION;