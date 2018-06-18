<?php 
include 'Conexao.php';
class Crud extends Conexao 
{
	public function AddCliente($cliente)
	{
		try {
			$sql ="Insert into(Cliente) values(?,?,?)";
			$prepara = getConexao()->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$prepara->bindParam(1, $cliente->getNome());
			$prepara->bindParam(2, $cliente->getEmail());
			$prepara->bindParam(3, $cliente->getTelefone());

			$prepara->execulte();
		} catch (Exception $e) {
			echo $e;
		}
	}

	public function Remove_Cliente($cliente)
	{
		try {
			$sql= "delete from Cliente where id=?";
			$prepara = getConexao()->prepare($sql);
		} catch (Exception $e) {
			echo $e;
			die();
		}
	}

	public function Alterar_Cliente($cliente)
	{
		try {
			$sql = "update from Cliente set nome =?, set emai=?, set telefone=? where id=?";
		$prepara-> getConexao()->prepare($sql);
		$prepara->bindParam(1, $cliente->getNome());
		$prepara->bindParam(2, $cliente->getEmail());
		$prepara->bindParam(3, $cliente->getTelefone());
		$prepara->bindParam(4, $cliente->getID());
		} catch (Exception $e) {
			echo $e;
			die();
		}

	}
}
 ?>