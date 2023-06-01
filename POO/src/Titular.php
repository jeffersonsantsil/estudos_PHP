<?php

class Titular
{
    private $cpf;
    private string $nomeTitular;    


    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nomeTitular = $nome;
    }


    public function mostrarNomeTitular(): string
    {
        return $this->nomeTitular;
    }


    public function mostrarCpfTitular()
    {
        return $this->cpf->getCpf();
    }



    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "É necessário que o tamanho do nome do usuário seja maior que 5.";
            exit();
        }
    }
}
