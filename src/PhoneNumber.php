<?php

namespace LaravelMyanmarTools\PhoneNumber;

use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMec;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMpt;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMyanmarPhoneNumber;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckMytel;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckOoredoo;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanCheckTelenor;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanExtractMec;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanExtractMpt;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanExtractMyanmarPhoneNumber;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanExtractMytel;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanExtractOoredoo;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanExtractTelenor;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanGetNetworkType;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanGetTelecomName;
use LaravelMyanmarTools\PhoneNumber\Concerns\CanNormalize;
use Spatie\Macroable\Macroable;

class PhoneNumber
{
    use CanCheckMec;
    use CanCheckMpt;
    use CanCheckMyanmarPhoneNumber;
    use CanCheckMytel;
    use CanCheckOoredoo;
    use CanCheckTelenor;
    use CanExtractMec;
    use CanExtractMpt;
    use CanExtractMyanmarPhoneNumber;
    use CanExtractMytel;
    use CanExtractOoredoo;
    use CanExtractTelenor;
    use CanGetNetworkType;
    use CanGetTelecomName;
    use CanNormalize;
    use Macroable;
}
