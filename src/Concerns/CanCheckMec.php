<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

trait CanCheckMec
{
    public function isMec(string $phone): bool
    {
        return boolval(
            value: preg_match(
                pattern: Telecom::MEC->getRegex(),
                subject: $phone
            )
        );
    }
}
