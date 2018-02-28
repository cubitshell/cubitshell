<!DOCTYPE html>
<html lang="en-MX">

<head>
    <title>NOSOTROS</title>
    <link href="<?php echo URL; ?>css/style_about.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo URL;?>js/maps.js" rel="stylesheet"></script>

</head>

<body>
        <div class="subhead">
            <ul id="slide">
                <li>
                    <img src="http://localhost/cubitshell/img/about_us/imagenes/soft.jpg">
                </li>
                <li>
                    <img src="http://localhost/cubitshell/img/about_us/imagenes/comp.jpg">
                </li>
                <li>
                    <img src="http://localhost/cubitshell/img/about_us/imagenes/codi.jpg">
                </li>
                <li>
                    <img src="http://localhost/cubitshell/img/about_us/imagenes/sist.jpg">
                </li>
            </ul>
        </div>
        <!--Aqui comienza el contenedor -->
        <div class="contenedor">
            <div id="mision">
                <div id="imision">
                    <div id="TexMision">
                        <h2><?php echo $this->contenido_idioma['about_us']['TituMision']; ?></h2>
                        <p id="miss"><?php echo $this->contenido_idioma['about_us']['miss']; ?></p>
                    </div>
                </div>
            </div>
            <div id="vision">
                <div id="imvision">
                    <div id="TextVision">
                        <h2><?php echo $this->contenido_idioma['about_us']['TituVision']; ?></h2>
                        <p><?php echo $this->contenido_idioma['about_us']['viss']; ?></p>
                    </div>
                </div>
            </div>
            <div id="cubishell">
                <div id="imcubi">
                    <div id="Textcubi">
                        <h2><?php echo $this->contenido_idioma['about_us']['Titucubit']; ?></h2>
                        <p><?php echo $this->contenido_idioma['about_us']['TextCubit']; ?></p>
                    </div>
                </div>
            </div>
            <div id="Equipo">
                <div id="imequip">
                    <div id="Textequipo">
                        <h2><?php echo $this->contenido_idioma['about_us']['TituEquipo']; ?></h2>
                        <p><?php echo $this->contenido_idioma['about_us']['TexEquipo']; ?></p>
                    </div>

                </div>
            </div>

        </div>
        <!--Aqui termina el contenedor-->

        <!--Aqui empieza los logos de las empresas con las que emos trabajado-->
        <h3><?php echo $this->contenido_idioma['about_us']['Textcarru']; ?></h3>
        <div class="content-all">
            <div class="content-carrusel">
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/Amazon.jpg"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/cdt.jpg"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/cisco.jpg"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/fed.png"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/ford.jpg"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/intel.jpg"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/silicon.png"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/spacex.png"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/tesla.jpg"></figure>
                <figure><img src="http://localhost/cubitshell/img/about_us/carrusel/visual.jpg"></figure>
            </div>
        </div>

        <!--Aqui inicia el google maps de las ubicaciones de nuestras sucursales-->
        <h3><?php echo $this->contenido_idioma['about_us']['Texsucur']; ?></h3>
        <div id="mapa">
            <select id="lugares" name="lugares" onchange="getslvalue()">
					<optgroup id="pa" label=<?php echo $this->contenido_idioma['about_us']['pais']; ?>>
						<option value="" id="buscar"><?php echo $this->contenido_idioma['about_us']['buscar']; ?></option>
						<option value="cancun" id="cancun"><?php echo $this->contenido_idioma['about_us']['cancun']; ?></option>
						<option value="yucatan" id="yucatan"><?php echo $this->contenido_idioma['about_us']['yucatan']; ?></option>
						<option value="oaxaca" id="oaxaca"><?php echo $this->contenido_idioma['about_us']['oaxaca']; ?></option>
						<option value="df" id="df"><?php echo $this->contenido_idioma['about_us']['df']; ?></option>
					</optgroup>
				</select>
            <div id="sucursales">
                <iframe id="ubi" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14883.100601636486!2d-86.84689157783092!3d21.16134467039479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssteren+cancun!5e0!3m2!1ses!2smx!4v1512065061192"></iframe>
            </div>
        </div>
        <!--Final del google maps-->
</body>

</html>