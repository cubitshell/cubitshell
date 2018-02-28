<?php
class Login 
{
    
    public $contenido_idioma = array();

    public $idioma = null;

    public function __construct($lang,$codigo_idioma)
    {
        $this->contenido_idioma = $lang;
        $this->idioma = $codigo_idioma;
    }

    public function index()
    {
        header( 'location:'. URL.$this->idioma.'/inicio');
    }

    public function registroUsuario()
    {
        if( isset( $_POST['nombre'])        && ! empty(trim($_POST['nombre']))&&
            isset( $_POST['apellidos'])     && ! empty(trim($_POST['apellidos']))&&
            isset( $_POST['pais'])          && ! empty(trim($_POST['pais']))&&
            isset( $_POST['direccion'])     && ! empty(trim($_POST['direccion']))&&
            isset( $_POST['telefono'])      && ! empty(trim($_POST['telefono']))&&
            isset( $_POST['correo'])        && ! empty(trim($_POST['correo']))&&
            isset( $_POST['contrasena'])    && ! empty(trim($_POST['contrasena']))&&
            isset( $_POST['contrasenaVal']) && ! empty(trim($_POST['contrasenaVal']))         
        )
        {
    		$usuario = array(
    				'nombre' =>trim($_POST['nombre']),
                    'apellidos' =>trim($_POST['apellidos']),
                    'pais' =>trim($_POST['pais']),
                    'direccion' =>trim($_POST['direccion']),
                    'telefono' =>trim($_POST['telefono']),
                    'correo' =>trim($_POST['correo']),
                    'contrasena' =>trim($_POST['contrasena']),
                    'contrasenaVal' =>trim($_POST['contrasenaVal'])
    				);

            if (isset($_SESSION['usuario']['tipoUsuario'])) {
              $usuario['tipoUsuario'] = $_POST['tipoUsuario'];
            }else{
              $usuario['tipoUsuario'] = 0;
            }
            if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                require APLICACION.'modelo/cubitshell_modelos.php'; 
                $conexion = new cubitshell_modelos();
                $conexion->RegistroUsuarios($usuario);
                $this->idioma=$usuario['pais'];
                header('location:'.URL.$this->idioma);
            }else{
                header('location:'. URL.$this->idioma.DIRECTORY_SEPARATOR.'login/registro');
            }
        }else{
            header('location:'. URL.$this->idioma.DIRECTORY_SEPARATOR.'login/registro');
        }
		
    }

    public function ingresaUsuario(){
        if(isset( $_POST['correo']) && ! empty(trim($_POST['correo']))&&
         isset( $_POST['contrasena']) && ! empty(trim($_POST['contrasena'])))
        {
            $quiereIngresar=array(
             'correo' => $_POST['correo'],
             'contrasena' => $_POST['contrasena']);
            if (file_exists(APLICACION.'modelo/cubitshell_modelos.php')) {
                require APLICACION.'modelo/cubitshell_modelos.php'; 
                $conexion = new cubitshell_modelos();
                $conexion->ValidaUsuario($quiereIngresar);
                if(isset($_SESSION['usuario'])){
                $this->idioma=$_SESSION['usuario']['pais'];
                header( 'location:'. URL.$this->idioma.'/inicio');
                }else{
                    $_SESSION['usuarioIncorrecto'] = TRUE;
                    header( 'location:'. URL.$this->idioma.'/inicio');
                }
            }
        }else{
            $_SESSION['usuarioIncorrecto'] = true;
            header( 'location:'. URL.$this->idioma.'/inicio');
        }

    }

    public function registro()
    {
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . 'login/registro.php';
        require VISTA . '_templates/footer.php';
    }

    public function cerrarSession(){
            unset($_SESSION['usuario']);
            if (isset($_SESSION['recienRegistrado'])) {
                unset($_SESSION['recienRegistrado']);
            }
            header( 'location:'. URL.$this->idioma.'/inicio');
    }
}