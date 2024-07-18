<?php

class Conexao
{
	private $host = "localhost";
	private $userName = "root";
	private $password = "";
	private $dBName = "estudos";



	public function conectar()
	{
		try{
			$pdo = new PDO
			(
				"mysql:dbname=$this->dBName;
				host=$this->host",
				$this->userName,
				$this->password
			);
			echo "Conexão estabelecida com sucesso!";

		}catch (PDOException $e)
		{
			echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
		}
	}



}
