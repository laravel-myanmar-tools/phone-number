<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanCheckMec
{
    public function isMec(string $phone): bool
    {
        return (new RegexService(str: $phone))->isMec();
    }
}
