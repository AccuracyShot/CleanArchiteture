<?php

namespace Felipe\Arquitetura;

use Felipe\Arquitetura\Domain\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase {
    public function testEmailInvalido() {
        $this->expectException(\InvalidArgumentException::class);
        new Email('emailinvalido');
    }

    public function testEmailValido() {
        $email = new Email('felipe@email.com');
        $this->assertSame('felipe@email.com', (string) $email);
    }
}