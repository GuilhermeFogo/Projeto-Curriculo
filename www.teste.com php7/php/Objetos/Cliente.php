<?php 

 include 'Pessoas.php';
class Cliente extends Pessoas
{
	private $telefone;
	private $id;

	public function getID()
	{
		return $this->id;
	}

	public function setID($id)
	{
		$this->id = $id;
	}


	public function getTelefone()
	{
		return $this->telefone;
	}

	public function setTelefone($tel)
	{
		$this->telefone = $tel;
	}
}
 ?>