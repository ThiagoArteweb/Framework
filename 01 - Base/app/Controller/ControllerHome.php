<?php
namespace App\Controller;

use Src\Classes\ClassRender;

class ControllerHome extends ClassRender
{

    #Método Construtor
    public function __construct()
    {
        $this->setTitle('Título');
        $this->setDescription('Description');
        $this->setKeywords('Keywords');
        $this->setDir('home/');
        $this->renderLayout();

    }
}