<?php


class Conta
{
	private $titular;
	private float $saldo;
	private static $numeroDeContas = 0;


	public function __construct(Titular $titular)
	{
		$this->titular = $titular;
		$this->saldo = 0;
		self::$numeroDeContas++;
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

	public function mostraSaldo(): float
	{
		return $this->saldo;
	}

	

	public function mostrarNomeTitular()
	{
		return $this->titular->mostrarNomeTitular();
	}



	public static function contaContas()
	{
		## "self" é o equivalente a "this", o "self" é usado para chamar um atributo "static" que pertence a classe
		return self::$numeroDeContas;
	}
}
