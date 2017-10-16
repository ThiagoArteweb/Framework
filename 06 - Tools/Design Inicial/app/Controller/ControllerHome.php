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
        $this->render->setTitle('Design Inicial');
        $this->render->setDescription('Design Inicial - Webdesign em Foco');
        $this->render->setKeywords('Design Inicial do Cliente da Webdesign em Foco.');
        $this->render->setDir('home/');
        $this->render->renderLayout();
    }

}