<?php

declare(strict_types=1);

namespace JeffersonSilva\EstudosPhp;

interface PessoaJuridicaInterface
{
    public function getCnpj(): string;
    public function getName(): string;
    public function getEmail(): string;
}
