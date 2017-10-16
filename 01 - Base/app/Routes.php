<?php
namespace App;

class Routes
{

    #Atributos
    private $rota;




    #Métodos de Encapsulamento
    public function getRota($i)
    {
        $this->rota=array(
            "" => "ControllerHome",
            "sitemap" => "ControllerSitemap"
        );


        if (array_key_exists($i, $this->rota)) {
            return $this->rota[$i];
        }else{
            return "ControllerHome";
        }

    }

}