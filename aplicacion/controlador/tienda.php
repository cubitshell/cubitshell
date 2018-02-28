<?php
class Tienda 
{
    
    public $contenido_idioma = array();

    public $idioma = null;

    public function __construct($lang,$codigo_idioma)
    {
        $this->contenido_idioma = $lang;
        $this->idioma = $codigo_idioma;
    }

    public function index(){
    	if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
            require APLICACION.'modelo/cubitshell_modelos.php'; 
            $conexion = new cubitshell_modelos();
            $productos = $conexion->tiendaProductos();
            }

	    	require VISTA . '_templates/header.php';
	        require VISTA . '_templates/menu.php';
	        require VISTA . 'tienda/index.php';
	        require VISTA . '_templates/footer.php';

    }
    public function informacionComponente(){
        if (isset($_POST['id']) && !empty($_POST['id'])) {
    
            if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                require APLICACION.'modelo/cubitshell_modelos.php'; 
                $conexion = new cubitshell_modelos();
                $producto = $conexion->infoComponente($_POST['id']);
                $productoCarac = $conexion->infoCaracteristicas($_POST['id']);
               $productoDeta = $conexion->infoDetalles($_POST['id']);
            }

                 require VISTA . '_templates/header.php';
                require VISTA . '_templates/menu.php';
                require VISTA . 'tienda/infoComponente.php';
                require VISTA . '_templates/footer.php';

        }

    }
     public function addCar(){
        if (isset($_POST['id']) && !empty($_POST['id']) &&
            isset($_POST['cantidad']) && !empty($_POST['cantidad'])
        ){
            if (isset($_SESSION['usuario'])) {
                if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                    require APLICACION.'modelo/cubitshell_modelos.php'; 
                    $conexion = new cubitshell_modelos();
                    $producto = $conexion->infoComponente($_POST['id']);
                    $productoCarac = $conexion->infoCaracteristicas($_POST['id']);
                    $productoDeta = $conexion->infoDetalles($_POST['id']);
                    $conexion->addCarrito($_POST['id'],$_POST['cantidad']);
                }                
            }else{
                $_SESSION['sessionNoIniciada'] = true;
                header('location:'. URL.$this->idioma.'/tienda');

            }
    

            //header('location:'. URL.$this->idioma.'/usuario');
        }

    }

    
        
}
