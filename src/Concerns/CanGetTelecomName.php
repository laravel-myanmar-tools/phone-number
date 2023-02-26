<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;
use LaravelMyanmarTools\PhoneNumber\Exceptions\InvalidMyanmarPhoneNumber;
use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanGetTelecomName
{
    public function getTelecom(string $phone): string
    {
        $regexService = new RegexService(str: $phone);
        if (! $regexService->isMyanmarPhoneNumber()) {
            throw new InvalidMyanmarPhoneNumber('Invalid myanmar phone number!');
        }

        if ($regexService->isMpt()) {
            return Telecom::MPT->getValue();
        }

        if ($regexService->isOoredoo()) {
            return Telecom::OOREDOO->getValue();
        }

        if ($regexService->isTelenor()) {
            return Telecom::TELENOR->getValue();
        }

        if ($regexService->isMec()) {
            return Telecom::MEC->getValue();
        }

        if ($regexService->isMytel()) {
            return Telecom::MYTEL->getValue();
        }

        return Telecom::ALL->getValue();
    }
}
