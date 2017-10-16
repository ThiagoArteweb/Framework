<?php
namespace App;

use App\Routes;

class Init extends Routes
{

    #Atributos
    private $urlArray;
    private $controller;
    private $method;
    private $param = [];
    private $obj;



    #Métodos de Encapsulamento
    public function getUrlArray()
    {
        return $this->urlArray;
    }

    public function setUrlArray($urlArray)
    {
        $this->urlArray = $urlArray;
    }

    protected function getController()
    {
        return $this->controller;
    }

    public function setController($controller)
    {
        $this->controller = $controller;
    }

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

        if (isset($_GET['url'])) {
            self::parseUrl($_GET['url']);
        }

        self::addController();


    }




    #Divide a url em um array
    public function parseUrl($url)
    {
        $this->setUrlArray(explode("/", rtrim($url), FILTER_SANITIZE_URL));
    }





    #Adiciona o controller
    private function addController()
    {
        $rotaController=$this->getRota($this->getUrlArray()[0]);

        if (file_exists(DIRREQUIRES . "app/controller/{$rotaController}.php")) {
            $this->setController("{$rotaController}");
        } else {
            $this->setController('ControllerHome');
        }

        $controller = $this->getController();
        $nameS = "App\\Controller\\{$controller}";
        $this->obj = new $nameS;

        if (isset($this->getUrlArray()[1])) {
            self::addMethod();
        }
    }





    #Adiciona o método
    private function addMethod()
    {
        if (method_exists($this->obj, $this->getUrlArray()[1])) {
            $this->setMethod("{$this->getUrlArray()[1]}");
            self::addParam();
            call_user_func_array([$this->obj, $this->getMethod()], $this->getParam());
        } else {
            $this->setMethod("");
        }
    }




    #Adiciona parametros
    private function addParam()
    {
        $contArray = count($this->getUrlArray());

        if ($contArray > 2) {
            foreach ($this->getUrlArray() as $key => $value) {
                if ($key > 1) {
                    $this->setParam($this->param += [$key => $value]);
                }
            }
        } else {
            $this->setParam([]);
        }
    }


}