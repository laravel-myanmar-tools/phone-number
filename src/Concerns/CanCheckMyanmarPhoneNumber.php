<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

trait CanCheckMyanmarPhoneNumber
{
    public function isMyanmarPhoneNumber(string $phone): bool
    {
        return boolval(
            value: preg_match(
                pattern: Telecom::ALL->getRegex(),
                subject: $phone
            )
        );
    }
}
