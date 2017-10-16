<?php
namespace App;

class Render
{

    #Atributos
    private $dir;
    private $title;
    private $description;
    private $keywords;




    #Métodos de Encapsulamento
    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir=null)
    {
        $this->dir = $dir;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    public function title()
    {
        echo $this->getTitle();
    }

    public function description()
    {
        echo $this->getDescription();
    }

    public function keywords()
    {
        echo $this->getKeywords();
    }









    #Renderiza o layout padrão
    public function renderLayout($layout=true){
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






    #Redirecionamento
    public function redirectUrl($url){
        echo "<script>window.location.href='".DIRPAGINAS."{$url}';</script>";
    }
}