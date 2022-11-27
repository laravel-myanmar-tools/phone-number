<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

trait CanCheckTelenor
{
    public function isTelenor(string $phone): bool
    {
        return boolval(
            value: preg_match(
                pattern: Telecom::TELENOR->getRegex(),
                subject: $phone
            )
        );
    }
}
