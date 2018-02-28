<?php 
class Producto 
{
    
    public $contenido_idioma = array();

    public $idioma = null;

    public function __construct($lang,$codigo_idioma)
    {
        $this->contenido_idioma = $lang;
        $this->idioma = $codigo_idioma;
    }

    public function control(){
    	if (isset($_SESSION['usuario'])) {
    		if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                	require APLICACION.'modelo/cubitshell_modelos.php'; 
                	$conexion = new cubitshell_modelos();
                	$Categorias=$conexion->get_catalogosCategoria();
                	$tiposcomponentes=$conexion->get_tiposComponentes();
            }
    			
	    	if (isset($_SESSION['usuario']['tipoUsuario'])) {
		    	require VISTA . '_templates/header.php';
		        require VISTA . '_templates/menu.php';
		        require VISTA . 'producto/control.php';
		        require VISTA . '_templates/footer.php';
	    	 }
	  	}else{
			header('location:'.URL.$this->idioma.DIRECTORY_SEPARATOR.'inicio' );
	  	}

	}

	public function registrarProducto(){
		 $imagetypes = array(
			    'image/png' => '.png',
			    'image/gif' => '.gif',
			    'image/jpeg' => '.jpg',
			    'image/bmp' => '.bmp');
		if (isset($_SESSION['usuario']['tipoUsuario'])) {
			if (
				isset($_POST['nombreProducto']) && !empty($_POST['nombreProducto'])&&
				isset($_POST['Precio']) && !empty($_POST['Precio'])&&
				isset($_POST['componenteCatagoria']) && !empty($_POST['componenteCatagoria'])&&
				isset($_POST['tipoComponente']) && !empty($_POST['tipoComponente'])&&
				isset($_POST['nombreimagen']) && !empty($_POST['nombreimagen'])&&
				isset($_POST['carateristicas']) && !empty($_POST['carateristicas'])&&
				isset($_FILES['imagenproducto']) && !empty($_FILES['imagenproducto'])&&
				isset($_POST['info']) && !empty($_POST['info']))
			{
				
				$producto = array(
				'nombreProducto' => $_POST['nombreProducto'],
				'nombreimagen' => $_POST['nombreimagen'],
				'Precio' => $_POST['Precio'],
				'componenteCatagoria' => $_POST['componenteCatagoria'],
				'tipoComponente' => $_POST['tipoComponente'],
				'carateristicas' => $_POST['carateristicas'],
				'info' => $_POST['info'],
				'url'=>  $_POST['nombreimagen'].$imagetypes[$_FILES['imagenproducto']['type']]
				);

				if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                	require APLICACION.'modelo/cubitshell_modelos.php'; 
                	$conexion = new cubitshell_modelos();
               

                move_uploaded_file($_FILES['imagenproducto']['tmp_name'], trim( $_SERVER["SCRIPT_FILENAME"], 'index.php') .DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'componentes'.DIRECTORY_SEPARATOR.'productosImagenes'.DIRECTORY_SEPARATOR.$producto['nombreimagen'].$imagetypes[$_FILES['imagenproducto']['type']]);
                	$_SESSION['productoRegistrado']= $conexion->registrarProducto($producto);
                	header('location:'.URL.$this->idioma.DIRECTORY_SEPARATOR.'producto/control' );
                }
				
			}else{
				header('location:'.URL.$this->idioma.DIRECTORY_SEPARATOR.'producto/control' );
			}
			
			
		}
		else{
				header('location:'.URL.$this->idioma.DIRECTORY_SEPARATOR.'inicio' );
			}
	}

	public function registrarCategoria(){
		if (isset($_SESSION['usuario'])) {
			
			
			if (isset($_POST['categoriaComponente'] ) && !empty(trim($_POST['categoriaComponente']))) {
				$CatalogoNuevo= trim($_POST['categoriaComponente']);
				if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
	                	require APLICACION.'modelo/cubitshell_modelos.php'; 
	                	$conexion = new cubitshell_modelos();
	                	$conexion->registroCatalogo($CatalogoNuevo);
	                	header('location:'.URL.$this->idioma.DIRECTORY_SEPARATOR.'producto/control' );
	            }
			}
		}else{
				header('location:'.URL.$this->idioma.DIRECTORY_SEPARATOR.'inicio' );
			}
	}
	public function registrarTipo(){
		if (isset($_POST['tipoComponente'] ) && !empty(trim($_POST['tipoComponente']))) {
			$CatalogoNuevo= trim($_POST['tipoComponente']);
			if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                	require APLICACION.'modelo/cubitshell_modelos.php'; 
                	$conexion = new cubitshell_modelos();
                	$conexion->registroTipo($CatalogoNuevo);
                	header('location:'.URL.$this->idioma.DIRECTORY_SEPARATOR.'producto/control' );
            }

		}

	}




}
