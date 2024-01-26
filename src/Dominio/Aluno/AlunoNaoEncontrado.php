<?php

namespace Felipe\Arquitetura\Dominio\Aluno;

use Felipe\Arquitetura\Dominio\Cpf;

class AlunoNaoEncontrado extends \DomainException
{
    public function __construct(Cpf $cpf)
    {
        parent::__construct("Aluno com CPF $cpf não encontrado");
    }
}
