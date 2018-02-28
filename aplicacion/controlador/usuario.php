<?php
class Usuario 
{
    
    public $contenido_idioma = array();

    public $idioma = null;

    public function __construct($lang,$codigo_idioma)
    {
        $this->contenido_idioma = $lang;
        $this->idioma = $codigo_idioma;
    }

    public function index(){
    	
    	if (isset($_SESSION['usuario'])) {


            if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                require APLICACION.'modelo/cubitshell_modelos.php'; 
                $conexion = new cubitshell_modelos();
                $carrito = $conexion->getCar($_SESSION['usuario']['id']);
                
            }
	    	require VISTA . '_templates/header.php';
	        require VISTA . '_templates/menu.php';
	        require VISTA . 'login/usuario.php';
	        require VISTA . '_templates/footer.php';
    	}else{
            header( 'location:'. URL.$this->idioma.'/inicio');
            // print_r($_SESSION['usuario']);
		}

    }
}
