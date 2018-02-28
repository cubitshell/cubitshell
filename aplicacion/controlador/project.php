<?php
class Project
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
        // load views
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . 'project/index.php';
        require VISTA . '_templates/footer.php';
    }

    public function soft()
    {
        // load views
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . 'project/soft.php';
        require VISTA . '_templates/footer.php';
    }

    public function desing()
    {
        // load views
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . 'project/web.php';
        require VISTA . '_templates/footer.php';
    }

    public function hard()
    {
        // load views
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . 'project/hard.php';
        require VISTA . '_templates/footer.php';
    }
 
}