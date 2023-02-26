<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanCheckMyanmarPhoneNumber
{
    public function isMyanmarPhoneNumber(string $phone): bool
    {
        return (new RegexService(str: $phone))->isMyanmarPhoneNumber();
    }
}
