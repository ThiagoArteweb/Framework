<?php
namespace App\Controller;

class ControllerSitemap
{
    #Método Construtor
    public function __construct()
    {
        include_once(DIRREQUIRES . "public/sitemap.php");
    }
}

