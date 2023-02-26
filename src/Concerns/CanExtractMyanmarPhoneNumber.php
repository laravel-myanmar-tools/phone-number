<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\NormalizerService;
use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanExtractMyanmarPhoneNumber
{
    public function extractMyanmarPhoneNumber(string $str): array
    {
        $str = (new NormalizerService(str: $str))->normalize();

        return (new RegexService(str: $str))->extractMyanmarPhoneNumber();
    }
}
