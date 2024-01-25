<?php

namespace Felipe\Arquitetura\Student;

use Stringable;

class PhoneNumber implements Stringable
{
    private string $number;
    private string $ddd;

    public function __construct(string $ddd, string $number)
    {
        $this->setDdd($ddd);
        $this->setNumber($number);
    }

    private function setDdd(string $ddd): void
    {
        $options = [
            'options' => [
                'regexp' => '/\d{2}/'
            ]
        ];

        if (filter_var($ddd, FILTER_VALIDATE_REGEXP, $options) === false) {
            throw new \InvalidArgumentException('Invalid DDD format');
        }

        $this->ddd = $ddd;
    }

    private function setNumber(string $number): void
    {
        $options = [
            'options' => [
                'regexp' => '/\(\d{2}\)\s\d{4,5}\-\d{4}/'
            ]
        ];

        if (filter_var($number, FILTER_VALIDATE_REGEXP, $options) === false) {
            throw new \InvalidArgumentException('Invalid phone number format');
        }

        $this->number = $number;
    }

    public function __toString(): string
    {
        return $this->number;
    }
}