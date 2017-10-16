<?php
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes
{

    #Traits
    use TraitUrlParser;


    #Atributos
    private $rota;




    #Métodos de Encapsulamento
    public function getRota()
    {
        $url=$this->parseUrl();
        $i=$url[0];

        $this->rota=array(
            "" => "ControllerHome",
            "home" => "ControllerHome",
            "sitemap" => "ControllerSitemap"
        );

        if (array_key_exists($i, $this->rota)) {
            if (file_exists(DIRREQUIRES . "app/Controller/{$this->rota[$i]}.php")) {
                return $this->rota[$i];
            } else {
                return "ControllerHome";
            }
        }else{
            return "ControllerHome";
        }
    }

}