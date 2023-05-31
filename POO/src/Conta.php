<?php


class Conta 
{
	public string $cpfTitular;
	public string $nome;
	public float $saldo;


	

	public function sacar($valorASacar){

		if ($valorASacar > $this->saldo) {
			echo "Você não possui limite suficiente! </br>";
		}else{
			$this->saldo -= $valorASacar;
			
		}
	}

	public function depositar($valorADepositar): void{
		if ($valorADepositar < 0){
			echo"Você não pode depositar valor negativo </br>";
		}else{
			$this->saldo += $valorADepositar;		
		}
	}

	public function transferir($valorATransferir, $contaDestino)
	{
		
		if ($valorATransferir < 0) {
			echo "Você não pode transferir valor negativo!";
		}elseif ($valorATransferir > $this->saldo)
		{
			echo "Você não possui esse saldo em conta!";
		}else
		{
			$contaDestino->saldo += $valorATransferir;
			echo "Valor de {$valorATransferir} tranferido com sucesso! </br>";
		}

		
	}





}