<?php
class Login
{
    public function index()
    {
        // load views
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . '_templates/login.php';
        require VISTA . '_templates/footer.php';
    }
    public function ingresar()
    {
    	if (isset($_POST) && !empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
    		$usuario = array(
    					'usuario' => $_POST['usuario'],
    					'contrasena' => $_POST['contrasena']
    					);

    		if (file_exists(APLICACION.'modelo/modelo.php')) {
    			require APLICACION.'modelo/modelo.php';	
    		}
    		$conexion = new Modelo_conexion();
    		$conexion->consultaLogin($usuario);
    	}else{
    		header('location:'.URL.'login/index');

    	}
    }
}