<?php

declare(strict_types=1);

namespace JeffersonSilva\EstudosPhp;

interface PessoaFisicaInterface
{
    public function getCpf(): string;
    public function getName(): string;
    public function getEmail(): string;
}
