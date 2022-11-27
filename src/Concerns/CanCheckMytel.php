<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

trait CanCheckMytel
{
    public function isMytel(string $phone): bool
    {
        return boolval(
            value: preg_match(
                pattern: Telecom::MYTEL->getRegex(),
                subject: $phone
            )
        );
    }
}
