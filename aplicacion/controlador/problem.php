<?php

class Problem

{

    public $contenido_idioma = array();

    public $idioma = null;

    public function __construct($lang,$codigo_idioma)
    {

        $this->contenido_idioma = $lang;
        $this->idioma = $codigo_idioma;
        header('location :' .URL);
    }

    public function index()
    {
        
    }
}
