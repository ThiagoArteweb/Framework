<?php
namespace Src\Classes;

class ClassRender
{

    #Atributos
    private $dir;
    private $title;
    private $description;
    private $keywords;




    #Métodos de Encapsulamento
    private function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir=null)
    {
        $this->dir = $dir;
    }

    private function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    private function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    private function getKeywords()
    {
        return $this->keywords;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }



    #Exibe o título
    public function title()
    {
        echo $this->getTitle();
    }



    #Exibe a description
    public function description()
    {
        echo $this->getDescription();
    }




    #Exibe as keywords
    public function keywords()
    {
        echo $this->getKeywords();
    }









    #Renderiza o layout padrão
    public function renderLayout($layout=true)
    {
        if($layout==true)
        {
            include_once(DIRREQUIRES."app/View/layout.php");
        } else {
            include_once(DIRREQUIRES."app/View/layoutClean.php");
        }
    }





    #Adiciona o head (se existir)
    public function addHead()
    {
        if(file_exists(DIRREQUIRES."app/View/{$this->getDir()}head.php")){
            include(DIRREQUIRES."app/View/{$this->getDir()}head.php");
        }
    }





    #Adiciona o header (se existir)
    public function addHeader()
    {
        if(file_exists(DIRREQUIRES."app/View/{$this->getDir()}header.php")){
            include(DIRREQUIRES."app/View/{$this->getDir()}header.php");
        }
    }







    #Adiciona o main (se existir)
    public function addMain()
    {
        if(file_exists(DIRREQUIRES."app/View/{$this->getDir()}main.php")){
            include(DIRREQUIRES."app/View/{$this->getDir()}main.php");
        }
    }






    #Adiciona o footer (se existir)
    public function addFooter()
    {
        if(file_exists(DIRREQUIRES."app/View/{$this->getDir()}footer.php")){
            include(DIRREQUIRES."app/View/{$this->getDir()}footer.php");
        }
    }
}