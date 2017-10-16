<?php
namespace Src\Traits;

trait TraitAlert
{
    #Alerta Javascript
    public function alerta($mensagem){
        echo "<script>alert('$mensagem');</script>";
    }
}