<?php

if (function_exists('mb_ereg_replace'))
{
    function mb_escape( $string)
    {
        return mb_ereg_replace('[\x00\x0A\x0D\x1A\x22\x25\x27\x5C\x5F]', '\\\0', $string);
    }
} else {
    function mb_escape( $string)
    {
        return preg_replace('~[\x00\x0A\x0D\x1A\x22\x25\x27\x5C\x5F]~u', '\\\$0', $string);
    }
}

function retrim($string)
{
   return   trim($string,"\x00\x0A\x0D\x1A\x22\x25\x27\x5C\x5F");
}
class Aplicacion
{
    public  $url_lang = 'EN';

    private $url_controlador = null;

    private $url_metodo = null;

    private $url_params = array();

    public  $contenido_idioma = array();


    public function __construct()
    {   
        
        if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

        $this->splitUrl();
        require IDIOMA.$this->url_lang.'.php';
        $this->contenido_idioma = ${$this->url_lang};

        if (!$this->url_controlador) {

            require APLICACION . 'controlador/inicio.php';
            $pagina = new Inicio($this->contenido_idioma,$this->url_lang);
            $pagina->index();

        } elseif (file_exists(APLICACION . 'controlador/' . $this->url_controlador . '.php')) {

            require APLICACION . 'controlador/' . $this->url_controlador . '.php';
            $this->url_controlador = new $this->url_controlador($this->contenido_idioma,$this->url_lang);

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
                   require APLICACION . 'controlador/inicio.php';
                   $pagina = new Inicio($this->contenido_idioma,$this->url_lang);
                   $pagina->index();
                }
            }
        } else {
            
            require APLICACION . 'controlador/inicio.php';
            $pagina = new Inicio($this->contenido_idioma,$this->url_lang);
            $pagina->index();
            
        }
    }

    private function splitUrl()
    {
        
        if (isset($_GET['url'])) {

            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $this->url_lang = isset($url[0]) ? $url[0] : 'EN';
            $this->url_controlador = isset($url[1]) ? $url[1] : null;
            $this->url_metodo = isset($url[2]) ? $url[2] : null;

            unset($url[0], $url[1], $url[2]);
            $this->url_params = array_values($url);

        }
    }


}
