<?php

use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

expect()->extend('toBeMyanmarPhoneNumber', function () {
    expect(phoneNumber()->isMyanmarPhoneNumber($this->value))->toBeTrue();
});

expect()->extend('toBeMptNumber', function () {
    expect(phoneNumber()->isMpt($this->value))->toBeTrue();
});

expect()->extend('toBeOoredooNumber', function () {
    expect(phoneNumber()->isOoredoo($this->value))->toBeTrue();
});

expect()->extend('toBeTelenorNumber', function () {
    expect(phoneNumber()->isTelenor($this->value))->toBeTrue();
});

expect()->extend('toBeMecNumber', function () {
    expect(phoneNumber()->isMec($this->value))->toBeTrue();
});

expect()->extend('toBeMytelNumber', function () {
    expect(phoneNumber()->isMytel($this->value))->toBeTrue();
});

function phoneNumber()
{
    return new PhoneNumber;
}
