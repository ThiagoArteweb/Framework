<?php
namespace Src\Traits;

trait TraitLocation
{
    #Redirecionamento
    public function redirectUrl($url){

        $pos=strpos($url,"http://");
        $pos2=strpos($url,"https://");

        if(is_int($pos) || is_int($pos2)){
            echo "<script>window.location.href='$url';</script>";
        }else{
            echo "<script>window.location.href='".DIRPAGINAS."{$url}';</script>";
        }
    }
}