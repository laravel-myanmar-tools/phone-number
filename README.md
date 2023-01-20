[![Run tests](https://github.com/Laravel-Myanmar-Tools/phone-number/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/Laravel-Myanmar-Tools/phone-number/actions/workflows/run-tests.yml)

# Phone Number

PHP Myanmar Phone Number for [Laravel Myanmar Tools](https://laravel-myanmar-tools.com)

Credit: [Original script (PHP)](https://github.com/johnreginald/myanmar-phone-number-php) [Original script (JS)](https://github.com/kaungmyatlwin/myanmar-phonenumber)

## Installation

```bash
composer require laravel-myanmar-tools/phone-number
```

## Usage

### Check Myanmar Phone Number

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->isMyanmarPhoneNumber('09250000000'); // return true
```

### Check MPT

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->isMpt('09250000000'); // return true
```

### Check Ooredoo

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->isOoredoo('09970000000'); // return true
```

### Check Telenor

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->isTelenor('09790000000'); // return true
```

### Check MEC

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->isMec('0930000000'); // return true
```

### Check Mytel

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->isMytel('09690000000'); // return true
```

### Get Telecom

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->getTelecom('09250000000'); // return "mpt"
$phoneNumber->getTelecom('09970000000'); // return "ooredoo"
$phoneNumber->getTelecom('09790000000'); // return "telenor"
$phoneNumber->getTelecom('0930000000'); // return "mec"
$phoneNumber->getTelecom('09690000000'); // return "mytel"
```

### Get Network Type

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->getNetworkType('09250000000'); // return "gsm"
$phoneNumber->getNetworkType('09440000000'); // return "wcdma"
```

### Normalize

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->normalize('09250000000'); // return "09250000000"
$phoneNumber->normalize('(၀၉)၂၅၀၀၀၀၀၀၀'); // return "09250000000"
$phoneNumber->normalize('၀၉-၂၅၀၀၀၀၀၀၀'); // return "09250000000"
$phoneNumber->normalize('09-၂၅ဝရဝရဝရဝ'); // return "09250000000"
```

## Customize

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;

$phoneNumber::macro('isAtom', function(string $phone) {
   return $this->isTelenor(phone: $phone);
});

$phoneNumber->isAtom('09790000000'); // return true
```

## Testing

```bash
composer test
```

## Credit

-[ToUnicode (Laravel Easy Converter)](https://github.com/KyawNaingTun/tounicode)
-[Rabbit-PHP](https://github.com/Rabbit-Converter/Rabbit-PHP)