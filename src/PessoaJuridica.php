<?php

declare(strict_types=1);

namespace JeffersonSilva\EstudosPhp;


class PessoaJuridica extends Pessoa implements PessoaJuridicaInterface
{
    private string $cnpj;
    private string $createdDate;
    private bool $status;

    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $cnpj,
        string $createdDate,
        bool $status
    ) {
        $this->cnpj = $cnpj;
        $this->createdDate = $createdDate;
        $this->status = $status;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function apresentacao(): string
    {
        $age = date('Y') - substr($this->createdDate, -4);
        $apresentacao = $this->getName() . " é uma empresa, possui o e-mail " . $this->getEmail() . " e possui " . $age . " anos de criação.";
        return $apresentacao . PHP_EOL;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
}
