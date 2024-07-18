<?php

declare(strict_types=1);

namespace JeffersonSilva\EstudosPhp;


class PessoaJuridica extends Pessoa
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
}
