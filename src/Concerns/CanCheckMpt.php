<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanCheckMpt
{
    public function isMpt(string $phone): bool
    {
        return (new RegexService(str: $phone))->isMpt();
    }
}
