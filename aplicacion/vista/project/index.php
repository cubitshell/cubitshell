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

    <div class="grid-container fluid main">
        <div class="contenedor">
            <!-- #intro -->
            <section id="intro" class="grid-x seccion">

                <div class="lado-izq small-12 medium-6 large-6 cell">
                    <!--<div class="lado-izq-recto"></div>
                <div class="lado-izq-redondo"></div>-->
                    <div class="texto-contenedor">
                        <h1 class="texto rojo" ><?php echo $this->contenido_idioma['project']['titulo_pre']; ?></h1>
                        <p>
                           <?php echo $this->contenido_idioma['project']['pre']; ?>
                        </p>
                    </div>
                </div>

                <div class="intro-derecho small-12 medium-6 large-6 cell">
                    <h2 class="texto" ><?php echo $this->contenido_idioma['project']['titulo_mis']; ?></h2>
                    <p><?php echo $this->contenido_idioma['project']['mis']; ?></p>
                </div>

            </section>
            <!-- #intro -->

            <!-- #software -->
            <section id="software" class="grid-x seccion">
                <div class="img-contenedor small-12 medium-5 large-6 cell">
                    <img src="<?php echo URL; ?>/img/project/software1.png" alt="Imagen" class="imagen">
                </div>

                <div class="lado-der small-12 medium-7 large-6 cell">

                    <!--<div class="lado-der-redondo"></div>
                <div class="lado-der-recto"></div>-->

                    <div class="texto-contenedor">
                        <h1 class="texto azul" id="titulo_soft"><?php echo $this->contenido_idioma['project']['titulo_soft']; ?></h1>
                        <p id="soft"><?php echo $this->contenido_idioma['project']['soft']; ?> </p>
                        <div class="cell small-3">
                            <a href="<?php echo URL.$this->idioma; ?>/project/soft"><button type="button" class="button ">Saber mas..</button></a>
                        </div>
                    </div>

                </div>
            </section>
            <!-- #software -->

            <!-- #web -->
            <section id="dweb" class="grid-x seccion">
                <div class="lado-izq small-12 medium-7 large-6 cell">
                    <!--<div class="lado-izq-recto"></div>
                <div class="lado-izq-redondo"></div>-->
                    <div class="texto-contenedor">
                        <h1 class="texto gris" ><?php echo $this->contenido_idioma['project']['titulo_web']; ?></h1>
                        <p><?php echo $this->contenido_idioma['project']['web']; ?></p>
                        <div class="cell small-3">
                            <a href="<?php echo URL.$this->idioma; ?>/project/desing"><button type="button" class="button ">Saber mas..</button></a>
                        </div>
                    </div>

                </div>
                <div class="img-contenedor small-12 medium-5 large-6 cell">
                    <img src="<?php echo URL; ?>img/project/desarrolloweb.png" alt="Imagen" class="imagen">
                </div>
            </section>
            <!-- #web -->

            <!-- #hadware -->
            <section id="hardware" class="grid-x seccion">
                <div class="img-contenedor small-12 medium-5 large-6 cell">
                    <img src="<?php echo URL; ?>/img/project/hard.png" alt="Imagen" class="imagen">
                </div>

                <div class="lado-der small-12 medium-7 large-6 cell">

                    <!--<div class="lado-der-redondo"></div>
                <div class="lado-der-recto"></div>-->

                    <div class="texto-contenedor">
                        <h1 class="texto verde" ><?php echo $this->contenido_idioma['project']['titulo_hard']; ?></h1>
                        <p><?php echo $this->contenido_idioma['project']['hard']; ?> </p>
                        <div class="cell small-3">
                            <a href="<?php echo URL.$this->idioma; ?>/project/hard"><button type="button" class="button ">Saber mas..</button></a>
                        </div>
                    </div>

                </div>
            </section>
            <!-- #hardware -->
        </div>
    </div>
</body>

</html>