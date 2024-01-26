<?php

namespace Felipe\Arquitetura\Dominio\Aluno;

interface EncriptadorDeSenha
{
    public function encriptar(string $senha): string;
    public function verificar(string $senhaEmTexto, string $senhaEncriptada): bool;
}