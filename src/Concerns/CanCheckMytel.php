<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanCheckMytel
{
    public function isMytel(string $phone): bool
    {
        return (new RegexService(str: $phone))->isMytel();
    }
}
