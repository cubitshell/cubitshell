<?php

class Idioma 
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
        if (isset($_POST['idioma']) && !empty($_POST['idioma'])) {
            $nuevoIdioma= $_POST['idioma'];
            // echo $_POST['seccion'].'<br>';
            $router = explode('/',$_POST['seccion']);
            unset($router[0]);
            // var_dump($router);
            $Pagina ='';
            foreach ($router as $key) {
                 $Pagina = $Pagina .$key.DIRECTORY_SEPARATOR;
            }
            // echo 'location:'.URL.$nuevoIdioma.DIRECTORY_SEPARATOR.$Pagina;
            header('location:'.URL.$nuevoIdioma.DIRECTORY_SEPARATOR.trim($Pagina,DIRECTORY_SEPARATOR));
        }
    }
}
