<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

trait CanCheckMpt
{
    public function isMpt(string $phone): bool
    {
        return boolval(
            value: preg_match(
                pattern: Telecom::MPT->getRegex(),
                subject: $phone
            )
        );
    }
}
