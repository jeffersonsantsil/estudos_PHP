<?php

class Titular
{


    private string $nomeTitular;
    private string $cpfTitular;


    public function __construct(string $cpf, string $nome)
    {
        $this->cpfTitular = $cpf;
        $this->validaNomeTitular($nome);
        $this->nomeTitular = $nome;
    }


    public function mostrarNomeTitular(): string
    {
        return $this->nomeTitular;
    }


    public function mostrarCpfTitular()
    {
        return $this->cpfTitular;
    }



    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "É necessário que o tamanho do nome do usuário seja maior que 5.";
            exit();
        }        
    }
}
