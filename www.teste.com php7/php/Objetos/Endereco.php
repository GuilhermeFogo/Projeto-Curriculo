<?php 

abstract class Endereco
{
	private $rua;
	private $CEP;
	private $descricao;
	private $bairro;

	public function getRua()
	{
		return $this->rua;
	}
	public function getCEP()
	{
		return $this->CEP;
	}
	public function getDescricao()
	{
		return $this->descricao;
	}
	public function getBairro()
	{
		return $this->bairro;
	}
}
 ?>