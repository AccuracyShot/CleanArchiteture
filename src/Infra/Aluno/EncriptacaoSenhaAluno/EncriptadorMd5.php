<?php

namespace Felipe\Arquitetura\Infra\Aluno;

use Felipe\Arquitetura\Dominio\Aluno\EncriptadorDeSenha;

class EncriptadorMd5 implements EncriptadorDeSenha
{
    public function encriptar(string $senha): string
    {
        return md5($senha);
    }

    public function verificar(string $senhaEmTexto, string $senhaEncriptada): bool
    {
        return md5($senhaEmTexto) === $senhaEncriptada;
    }
}