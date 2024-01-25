<?php

namespace Felipe\Arquitetura;

use Felipe\Arquitetura\Student\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    public function testPhoneNumberInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        new PhoneNumber('11', '123456789');
    }

    public function testPhoneNumberValido()
    {
        $phoneNumber = new PhoneNumber('11', '(11) 1234-5678');
        $this->assertSame('(11) 1234-5678', (string) $phoneNumber);
    }
}