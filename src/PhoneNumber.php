<?php

namespace LaravelMyanmarTools\PhoneNumber;

use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMec;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMpt;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMyanmarPhoneNumber;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMytel;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckOoredoo;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckTelenor;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanGetNetworkType;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanGetTelecomName;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanNormalize;
use Spatie\Macroable\Macroable;

class PhoneNumber
{
    use CanCheckMyanmarPhoneNumber,
        CanCheckMpt,
        CanCheckOoredoo,
        CanCheckTelenor,
        CanCheckMec,
        CanCheckMytel,
        CanGetNetworkType,
        CanGetTelecomName,
        CanNormalize,
        Macroable;
}
