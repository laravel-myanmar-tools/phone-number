<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Services\NormalizerService;
use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanExtractTelenor
{
    public function extractTelenor(string $str): array
    {
        $str = (new NormalizerService(str: $str))->normalize();

        return (new RegexService(str: $str))->extractTelenor();
    }
}
