<?php 
 abstract class Conexao
{
	private $conexao;


	public function getConexao()
	{
		return $this->conexao;
	}

	public function setConexao($con)
	{
		$this->conexao = $con;
	}
	
	public function ConectaBD()
	{
		$dsn = 'mysql:host=localhost;dbname=testdb';
		$username = 'username';
		$password = 'password';
		$options = array(
    					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		); 
		try {
			
		$this->conexao = new PDO($dsn, $username, $password, $options);
		} catch (PDOExeption $e) {
			echo $e;
			echo "<br><br>";
			echo "Algo deu errado";
			die();
		}
	}
}
 ?>