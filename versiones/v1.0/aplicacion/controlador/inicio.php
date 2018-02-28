<?php

class Inicio
{
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
