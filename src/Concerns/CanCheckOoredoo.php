<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

trait CanCheckOoredoo
{
    public function isOoredoo(string $phone): bool
    {
        return boolval(
            value: preg_match(
                pattern: Telecom::OOREDOO->getRegex(),
                subject: $phone
            )
        );
    }
}
