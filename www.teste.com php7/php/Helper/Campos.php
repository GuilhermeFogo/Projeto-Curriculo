<?php 
class HelperCampos
{

	private $campo_nome;
	private $campo_email;
	private $campo_tel;
	private $cliente;

	function __construct()
	{
		$this->campo_nome = $_POST['campo_nome'];
		$this->campo_email = $_POST['campo_email'];
		$this->campo_tel = $_POST['campo_telefone'];
		$this->cliente = new Cliente();
	}

	public function Vazio() 
	{
		if (empty($this->campo_nome)|| empty($this->campo_tel)|| empty($this->campo_email)) {
			echo "<p onsubmit='alert('tente Novamente')'></p>";
		}else{
			$this->cliente->setNome($this->campo_nome);
			$this->cliente->setEmail($this->campo_email);
			$this->cliente->setTelefone($this->campo_tel);
		}
	}


}
 ?>