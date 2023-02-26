<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanCheckOoredoo
{
    public function isOoredoo(string $phone): bool
    {
        return (new RegexService(str: $phone))->isOoredoo();
    }
}
