<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanCheckTelenor
{
    public function isTelenor(string $phone): bool
    {
        return (new RegexService(str: $phone))->isTelenor();
    }
}
