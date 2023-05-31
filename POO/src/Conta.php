<?php


class Conta
{
	private string $cpfTitular;
	private string $nomeTitular;
	private float $saldo;


	public function __construct(string $cpf, $nome)
	{
		$this->validaNome($nome);
		$this->cpfTitular = $cpf;
		$this->nomeTitular = $nome;
		$this->saldo = 0;
	}

	public function sacar($valorASacar)
	{

		if ($valorASacar > $this->saldo) {
			echo "Você não possui limite suficiente! </br>";
			return;
		}
		$this->saldo -= $valorASacar;
	}

	public function depositar($valorADepositar): void
	{
		if ($valorADepositar < 0) {
			echo "Você não pode depositar valor negativo </br>";
			return;
		}
		$this->saldo += $valorADepositar;
	}

	public function transferir($valorATransferir, $contaDestino)
	{

		if ($valorATransferir < 0) {
			echo "Você não pode transferir valor negativo!";
		} elseif ($valorATransferir > $this->saldo) {
			echo "Você não possui esse saldo em conta!";
		} else {
			$contaDestino->saldo += $valorATransferir;
			echo "Valor de {$valorATransferir} tranferido com sucesso! </br>";
		}
	}

	public function mostraNome(): string
	{
		return $this->nomeTitular;
	}

	public function mostraCpfTitular(): string
	{
		return $this->cpfTitular;
	}

	public function mostraSaldo(): float
	{
		return $this->saldo;
	}


	private function validaNome(string $nome)
	{
		if (strlen($nome) < 5) {
			return $this->mensagens("É necessário que o tamanho do nome do usuário seja maior que 5.");
			exit();
		}		
	}

	private function mensagens($msg)
	{
		echo $msg;
	}
}
