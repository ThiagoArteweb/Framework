<?php
namespace App\Controller;

use App\Model\ModelAvaliacao;
use Src\Classes\ClassRender;

class ControllerHome extends ModelAvaliacao
{

    private $render;

    #Método Construtor
    public function __construct()
    {
        $this->render=new ClassRender();
        $this->render->setTitle('Título');
        $this->render->setDescription('Description');
        $this->render->setKeywords('Keywords');
        $this->render->setDir('home/');
        $this->render->renderLayout();
    }





    public static function avaliacao($valor)
    {
        parent::avaliacao($valor);
    }





    public static function notaFinal()
    {
        $qtdeNotas=count(parent::notaFinal());
        $somaNotas=0;
        foreach(parent::notaFinal() as $key => $campo){
            $somaNotas += $campo->nota;
        }
        $media=$somaNotas/$qtdeNotas;
        echo number_format($media,"2",",",".").' baseado em '.$qtdeNotas.' votos';

    }
}
