<?php

namespace Felipe\Arquitetura\Domain\Indication;

use Felipe\Arquitetura\Student\Student;

class Indication 
{
    private Student $indicated;
    private Student $indicating;
    private \DateTimeImmutable $date;

    public function __construct(Student $indicated, Student $indicating) 
    {
        $this->indicated = $indicated;
        $this->indicating = $indicating;

        $this->date = new \DateTimeImmutable();
    }
}