<?php
class About 
{	
  public $idioma = null;

    public function __construct($lang,$codigo_idioma)
    {
        $this->contenido_idioma = $lang;
        $this->idioma = $codigo_idioma;
    }

    public function index()
    {
        require VISTA . '_templates/header.php';
        require VISTA . '_templates/menu.php';
        require VISTA . 'about_us/index.php';
        require VISTA . '_templates/footer.php';
    }
 
}