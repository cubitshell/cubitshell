<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CUBITSHELL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/foundation.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/jquery.ui.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
    <style>
        #index {
            background-image: url('<?php echo URL; ?>/img/web-fondo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top;
            height: 400px;
        }
    #inicio {
        background-image: url('<?php echo URL; ?>/img/bg-p.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
        height: 400px;
        overflow: hidden;
    }
    #componentes-bg {
        background-image: url('<?php echo URL; ?>/img/circuit.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
        height: 100%;
        width: 100%;
    }

    .top-bar,
    .title-bar {
        background-image: url('<?php echo URL; ?>/img/texture.png');
    }
    #registro{
        background-image: url('<?php echo URL; ?>/img/registrobg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
    }
    .menuUsuario li, #contenedorUsuario ,#opcionesUsuario{
      background-image: url('<?php echo URL; ?>/img/texture.png');
    }    

    </style>
</head>
<body style="overflow-x: hidden;">
    
<div class = "off-canvas position-right" id = "offCanvas" data-off-canvas > 
    
    <div class="grid-container">
        <div class="grid-margin-x margin-1">
            <h4>Ingresa </h4>
            <hr>
            <form action="<?php echo URL.$this->idioma.DIRECTORY_SEPARATOR; ?>login/ingresaUsuario" method="POST" data-abide novalidate>
            <?php if (isset($_SESSION['usuarioIncorrecto'])) {
                echo '<div class="callout alert">
                        <h5>Usuario o contrasena Incorrecta</h5>
                    </div>';
                    unset($_SESSION['usuarioIncorrecto']);
            } ?>                
                <label><i class="fa fa-user" aria-hidden="true"></i> Usuario
                    <input class="input-group-field" type="email" name="correo" placeholder="Correo Electronico">
                </label> 
            
                    <label><i class="fa fa-key" aria-hidden="true"></i> Contraseña
                    <input class="input-group-field" type="password" name="contrasena" placeholder="Contraseña" minlength="10">
                </label>
                <button class="button" type="submit"> Enviar </button>
            </form>
            <hr>
            <a href="<?php echo URL; ?>EN/login/registro">Registrate y obten los beneficios </a>

        </div>
    </div>
</div>
<div class = "grid-container padding-0 margin-0 fluid off-canvas-content" data-off-canvas-content > 

