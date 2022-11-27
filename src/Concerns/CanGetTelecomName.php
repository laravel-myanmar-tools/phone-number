<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;
use LaravelMyanmarTools\PhoneNumber\Exceptions\InvalidMyanmarPhoneNumber;

trait CanGetTelecomName
{
    public function getTelecom(string $phone): string
    {
        if (! $this->isMyanmarPhoneNumber($phone)) {
            throw new InvalidMyanmarPhoneNumber('Invalid myanmar phone number!');
        }

        if ($this->isMpt(phone: $phone)) {
            return Telecom::MPT->getValue();
        }

        if ($this->isOoredoo(phone: $phone)) {
            return Telecom::OOREDOO->getValue();
        }

        if ($this->isTelenor(phone: $phone)) {
            return Telecom::TELENOR->getValue();
        }

        if ($this->isMec(phone: $phone)) {
            return Telecom::MEC->getValue();
        }

        if ($this->isMytel(phone: $phone)) {
            return Telecom::MYTEL->getValue();
        }

        return Telecom::ALL->getValue();
    }
}
