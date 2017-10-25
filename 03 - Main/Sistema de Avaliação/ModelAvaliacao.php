<?php
namespace App\Model;

abstract class ModelAvaliacao extends ModelCrud
{

    protected static function avaliacao($valor){
        $id=0;
        parent::insert(
            "avaliacao",
            "?,?,?",
            array(
                $id,
                '1',
                $valor
            )
        );
    }


    protected static function notaFinal(){
        $bf=parent::select(
            "*",
            "avaliacao",
            "where id_produto=?",
            array(1)
        );
        $i=0;
        while($f=$bf->fetch(\PDO::FETCH_OBJ)){
            $resultado[$i]=$f;
            $i++;
        }
        return $resultado;
    }

}