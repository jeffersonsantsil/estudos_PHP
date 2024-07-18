<?php


declare(strict_types=1);

namespace JeffersonSilva\EstudosPhp;

class PessoaFisica extends Pessoa
{
    private string $cpf;
    private string $dateBorn;
    private string $genre;


    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $cpf,
        string $dateBorn,
        string $genre

    ) {
        $this->cpf = $cpf;
        $this->dateBorn = $dateBorn;
        $this->genre = $genre;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function apresentacao(): string
    {
        $age = date('Y') - substr($this->dateBorn, -4);
        $apresentacao = $this->getName() . " tem o e-mail " . $this->getEmail() . " e tem " . $age . " anos.";
        return $apresentacao . PHP_EOL;
    }
}
