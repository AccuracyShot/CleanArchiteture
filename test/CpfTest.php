<?php

namespace Felipe\Arquitetura;

use Felipe\Arquitetura\Domain\Cpf;
use PHPUnit\Framework\TestCase;


class CpfTest extends TestCase
{
    public function testCpfInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Cpf('12345678910');
    }

    public function testCpfValido()
    {
        $cpf = new Cpf('123.456.789-09');
        $this->assertSame('123.456.789-09', (string) $cpf);
    }
}