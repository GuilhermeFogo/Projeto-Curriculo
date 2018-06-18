<?php 

include 'Endereco.php';
abstract class Pessoas extends Endereco
{
	private $nome;
	private $sexo;
	private $email;
	private $id;

	public function getNome()
	{
		return $this->nome;
	}
	public function getSexo()
	{
		return $this->sexo;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}








}
 ?>