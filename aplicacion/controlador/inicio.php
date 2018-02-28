<?php

class Inicio 
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
        
        require APLICACION.'modelo/modelo_index.php';
        $modelo_index = new Modelo_index();
        $datosCompo = $modelo_index->get4componentes();
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . 'home/index.php';
        require VISTA . '_templates/footer.php';
        
    }
}
