<?php
namespace App\Model;

class ModelCrud extends ModelConexao{


	#Atributos
	private $Crud;




	#Métodos
	#Preparando e Executando
	public function prepareExecute($prep,$exec)
	{
		$this->Crud=$this->conectar()->prepare($prep);
		$this->Crud->execute($exec);
	}






	#Inserindo
	public function insert($table,$cond,$exec)
	{
		$this->prepareExecute("INSERT INTO ".$table." VALUES (".$cond.")",$exec);
		return $this->Crud;
	}






	#Selecionando
	public function select($Fields,$table,$cond,$exec)
	{
		$this->prepareExecute("SELECT ".$Fields." FROM ".$table." ".$cond,$exec);
		return $this->Crud;
	}





	#Atualizando
	public function update($table,$cond,$where,$exec)
	{
		$this->prepareExecute("UPDATE ".$table." SET ".$cond." WHERE ".$where,$exec);
		return $this->Crud;
	}





	#Deletando
	public function delete ($table,$cond,$exec)
	{
		$this->prepareExecute("DELETE FROM ".$table." WHERE ".$cond."",$exec);
		return $this->Crud;
	}
}

