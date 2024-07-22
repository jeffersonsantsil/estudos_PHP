<?php

declare(strict_types=1);

namespace JeffersonSilva\EstudosPhp;


abstract class Pessoa
{
    public string $name;
    public string $email;
    public string $phone;

    public function __construct(
        string $name,
        string $email,
        string $phone,

    ) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

}
