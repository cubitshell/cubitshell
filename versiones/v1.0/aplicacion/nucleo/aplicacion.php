<?php

class Aplicacion
{
    private $url_controlador = null;

    private $url_metodo = null;

    private $url_params = array();


    public function __construct()
    {   
        
        $this->splitUrl();

        if (!$this->url_controlador) {

            require APLICACION . 'controlador/inicio.php';
            $pagina = new Inicio();
            $pagina->index();

        } elseif (file_exists(APLICACION . 'controlador/' . $this->url_controlador . '.php')) {

            require APLICACION . 'controlador/' . $this->url_controlador . '.php';
            $this->url_controlador = new $this->url_controlador();

            if (method_exists($this->url_controlador, $this->url_metodo)) {

                if (!empty($this->url_params)) {
                    call_user_func_array(array($this->url_controlador, $this->url_metodo), $this->url_params);
                } else {
                    $this->url_controlador->{$this->url_metodo}();
                }

            } else {
                if (strlen($this->url_metodo) == 0) {
                    $this->url_controlador->index();
                }
                else {
                    header('location: ' . URL . 'problem');
                }
            }
        } else {
            header('location: ' . URL . 'problem');
        }
    }

    private function splitUrl()
    {
        
        if (isset($_GET['url'])) {

            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $this->url_controlador = isset($url[0]) ? $url[0] : null;
            $this->url_metodo = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);
            $this->url_params = array_values($url);

        }
    }
}
