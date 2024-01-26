<?php

namespace Felipe\Arquitetura\Infra\Aluno\Emailndicacao;

use Felipe\Arquitetura\Dominio\Aluno\Aluno;
use Felipe\Arquitetura\App\Indicacao\EnviaEmailDeIndicacao;

class IndicacaoMailPhp implements EnviaEmailDeIndicacao
{
    public function enviaPara(Aluno $alunoIndicado): void
    {
        $mensagem = "Olá {$alunoIndicado->nome()}! Você acaba de ser indicado por um amigo para conhecer a plataforma da Alura, aproveite!";

        mail($alunoIndicado->email(), 'Indicação', $mensagem);
    }
}