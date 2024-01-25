<?php

namespace Felipe\Arquitetura\Domain;

use Stringable;

// Um e-mail é um value object, pois não tem identidade, e sim valor.
class Email implements Stringable
{
    private string $address;

    public function __construct(string $address)
    {
        if (filter_var($address, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException('Invalid e-mail address');
        }

        $this->address = $address;
    }

    public function __toString(): string
    {
        return $this->address;
    }
}