<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Exceptions\InvalidMyanmarPhoneNumber;
use LaravelMyanmarTools\PhoneNumber\Services\NormalizerService;
use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanNormalize
{
    public function normalize(string $phone, string $prefix = '09'): string
    {
        $phone = (new NormalizerService(str: $phone))->normalize();

        if (! (new RegexService(str: $phone))->isMyanmarPhoneNumber()) {
            throw new InvalidMyanmarPhoneNumber('Invalid myanmar phone number!');
        }

        return preg_replace('/^\+?959|09/', $prefix, $phone);
    }
}
