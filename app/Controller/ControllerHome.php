<?php
namespace App\Controller;

use App\Render;

class ControllerHome
{

    #Atributos
    private $render;



    #Método Construtor
    public function __construct() {
        $this->render=new Render();
        $this->render->setTitle('Título');
        $this->render->setDescription('Description');
        $this->render->setKeywords('Keywords');
        $this->render->setDir('home/');
        $this->render->renderLayout();
    }

}