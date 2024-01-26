<?php

namespace Felipe\Arquitetura\Infra\Aluno;

use Felipe\Arquitetura\Dominio\Aluno\EncriptadorDeSenha;

class EncriptadorPhp implements EncriptadorDeSenha
{
    public function encriptar(string $senha): string
    {
        return password_hash($senha, PASSWORD_ARGON2ID);
    }

    public function verificar(string $senhaEmTexto, string $senhaEncriptada): bool
    {
        return password_verify($senhaEmTexto, $senhaEncriptada);
    }
}