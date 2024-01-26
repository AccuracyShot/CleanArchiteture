<?php

use Felipe\Arquitetura\Dominio\Aluno\Aluno;
use Felipe\Arquitetura\Infra\Aluno\RepositorioDeAlunoEmMemoria;

require 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$numero = $argv[5];

$aluno = Aluno::comCpfNomeEEmail($cpf, $nome, $email)
    ->adicionarTelefone($ddd, $numero)
    ->adicionarTelefone('11', '987654321')
    ->adicionarTelefone('11', '912345678');

$repositorio = new RepositorioDeAlunoEmMemoria();
$repositorio->adicionar($aluno);