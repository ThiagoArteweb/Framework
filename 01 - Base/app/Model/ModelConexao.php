<?php
namespace App\Model;

use \PDO;
use \PDOException;

abstract class ModelConexao{

    public function conectar()
    {
        try{
            $con=new PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $con;
        }
        catch(PDOException $erro){
            return $erro->getMessage();
        }
    }

}
