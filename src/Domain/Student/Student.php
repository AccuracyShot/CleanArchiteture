<?php

namespace Felipe\Arquitetura\Student;

use Felipe\Arquitetura\Domain\Cpf;
use Felipe\Arquitetura\Domain\Email;

//Um aluno é uma entidade, pois tem identidade.
class Student
{ 
    private Cpf $cpf;  
    private string $name;
    private Email $email;
    private array $phones;

    public static function withCpfNameAndEmail(string $cpf, string $name, string $email): self
    {
        return new Student(new Cpf($cpf), $name, new Email($email));
    }

    public function __construct(Cpf $cpf, string $name, Email $email) 
    {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->email = $email;
    }

    public function addPhoneNumber($ddd, $number) 
    {
        $this->phones[] = new PhoneNumber($ddd, $number);
        return $this;
    }
}