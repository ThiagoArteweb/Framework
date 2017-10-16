<?php
namespace App;

use Src\Classes\ClassRoutes;


class Init extends ClassRoutes
{



    #Atributos
    private $method;
    private $param = [];
    private $obj;



    #Métodos de Encapsulamento
    protected function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    protected function getParam()
    {
        return $this->param;
    }

    public function setParam($param)
    {
        $this->param = $param;
    }




    #Método construtor
    public function __construct()
    {
        require_once("../config/config.php");

        self::addController();
    }





    #Adiciona o controller
    private function addController()
    {
        $rotaController=$this->getRota();

        $nameS = "App\\Controller\\{$rotaController}";
        $this->obj = new $nameS;

        if (isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }





    #Adiciona o método
    private function addMethod()
    {
        if (method_exists($this->obj, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->obj, $this->getMethod()], $this->getParam());
        }
    }




    #Adiciona parametros
    private function addParam()
    {
        $contArray = count($this->parseUrl());

        if ($contArray > 2) {
            foreach ($this->parseUrl() as $key => $value) {
                if ($key > 1) {
                    $this->setParam($this->param += [$key => $value]);
                }
            }
        }
    }


}