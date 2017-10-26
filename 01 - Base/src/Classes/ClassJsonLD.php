<?php
namespace Src\Classes;

class ClassJsonLD
{

    private static $data;




    /** Prepara o Json de Organização */
    public static function organizacao(){

        self::$data=array(
             "@context"=>"http://schema.org",
             "@type"=>"AutomotiveBusiness",
             "@id"=>"http=>//www.automaiscarros.com.br",
              "name"=>"Auto+Carro$",
              "image"=>"http://automaiscarros.com.br/wp-content/uploads/2017/08/Fiat-Adventure-imagem-6.png",
              "address"=>array(
                "@type"=>"PostalAddress",
                "streetAddress"=>"Rua tiradentes, 200",
                "addressLocality"=>"Santa Clara",
                "addressRegion"=>"MG",
                "postalCode"=>"35500155",
                "addressCountry"=>"BRA"
              ),
              "telephone"=>"+5537991285360",
              "priceRange"=>"$$$",
              "department"=>"Venda de carros",
              "description"=>"Esse é um site",
              "servesCuisine"=>"Estabelecimento de Comida"
        );
        self::imprimirJson();
    }






    /** Imprime o Json */
    public static function imprimirJson()
    {
        echo "<script type='application/ld+json'>";
            echo json_encode(self::$data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        echo "</script>";
    }

}