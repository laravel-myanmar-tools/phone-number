<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\NormalizerService;
use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanExtractMpt
{
    public function extractMpt(string $str): array
    {
        $str = (new NormalizerService(str: $str))->normalize();

        return (new RegexService(str: $str))->extractMpt();
    }
}
