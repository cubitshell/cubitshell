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

    <div class="grid-container fluid main main-web" >
        <div class="contenedor contenedor-web">
           
            <section  class="grid-x seccion">

                <div class="cell small-12 titulo">
                    <h1 class="texto gris" ><?php echo $this->contenido_idioma['web']['titulo']?></h1>
                </div>

                <div class="cell small-12 large-6 medium-6 text-cont">

                    <div class="texto-subp texto-contenedor">
                        <h3 class="texto gris"><?php echo $this->contenido_idioma['web']['titulo-2'];?></h3>
                        <p><?php echo $this->contenido_idioma['web']['texto-1']?>
                        </p>
                    </div>
                </div>
                <div class="cell small-12 large-6 medium-6 text-cont">
                    <div class="texto-subp texto-contenedor">
                        <h3 class="texto gris"><?php echo $this->contenido_idioma['web']['titulo-3']; ?></h3>
                        <p id="soft-2">
                            <?php echo $this->contenido_idioma['web']['texto-2']; ?>
                    </div>
                </div>
               
            </section>

            <section class="imagen">
                <img src="<?php echo URL; ?>img/project/desingWeb.png" alt="lenguajes">
            </section>
            
        </div>
    </div>
</body>

</html>