<!DOCTYPE html>

<html lang="en">

<head>
    <title>CubitShell</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/foundation.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/style_project.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>

    <div class="grid-container fluid main main-soft" >
        <div class="contenedor contenedor-soft">
           
            <section  class="grid-x seccion">

                <div class="cell small-12 titulo">
                    <h1 class="texto azul" ><?php echo $this->contenido_idioma['software']['titulo']?></h1>
                </div>

                <div class="cell small-12 large-6 medium-6 text-cont">

                    <div class="texto-subp texto-contenedor"> 
                        <p><?php echo $this->contenido_idioma['software']['texto-1']?></p>
                    </div>
                </div>
                <div class="cell small-12 large-6 medium-6 text-cont">
                    <div class="texto-subp texto-contenedor">
                        
                        <p><?php echo $this->contenido_idioma['software']['texto-2']?> </p>
                    </div>
                </div>
               
            </section>

            <section class="imagen">
                <h1 class="texto rojo" ><?php echo $this->contenido_idioma['software']['titulo-2']?></h1>
                <img src="<?php echo URL; ?>img/project/leng.png" alt="lenguajes">
            </section>
            
        </div>
    </div>
</body>

</html>