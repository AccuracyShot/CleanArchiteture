<?php

namespace Felipe\Arquitetura\Domain\Student;

use Felipe\Arquitetura\Domain\Cpf;
use Felipe\Arquitetura\Student\Student;

interface StudentRepository
{
    public function add(Student $student): void;
    public function findByCpf(Cpf $cpf): Student;

    public function findAll(): array;   
}