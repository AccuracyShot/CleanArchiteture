<?php

namespace Felipe\Arquitetura\App\Indicacao;

use Felipe\Arquitetura\Dominio\Aluno\Aluno;

interface EnviaEmailDeIndicacao
{
    public function enviaPara(Aluno $alunoIndicado): void;
}