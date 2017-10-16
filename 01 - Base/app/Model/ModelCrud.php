<?php
namespace App\Model;

class ModelCrud extends ModelConexao{


	#Atributos
	private static $crud;




	#Métodos
	#Preparando e Executando
	public static function prepareExecute($prep,$exec)
	{
		self::$crud=parent::conectar()->prepare($prep);
		self::$crud->execute($exec);
	}






	#Inserindo
	public static function insert($table,$cond,$exec)
	{
		self::prepareExecute("INSERT INTO ".$table." VALUES (".$cond.")",$exec);
		return self::$crud;
	}






	#Selecionando
	public static function select($Fields,$table,$cond,$exec)
	{
		self::prepareExecute("SELECT ".$Fields." FROM ".$table." ".$cond,$exec);
		return self::$crud;
	}





	#Atualizando
	public static function update($table,$cond,$where,$exec)
	{
		self::prepareExecute("UPDATE ".$table." SET ".$cond." WHERE ".$where,$exec);
		return self::$crud;
	}





	#Deletando
	public static function delete ($table,$cond,$exec)
	{
		self::prepareExecute("DELETE FROM ".$table." WHERE ".$cond."",$exec);
		return self::$crud;
	}
}

