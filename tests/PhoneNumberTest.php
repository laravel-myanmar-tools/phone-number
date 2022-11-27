<?php

use LaravelMyanmarTools\PhoneNumber\Enums\Network;
use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

it('can check myanmar phone number', function () {
    expect('09250000000')->toBeMyanmarPhoneNumber(); // mpt
    expect('09970000000')->toBeMyanmarPhoneNumber(); // ooredoo
    expect('09790000000')->toBeMyanmarPhoneNumber(); // telenor
    expect('0930000000')->toBeMyanmarPhoneNumber(); // mec
    expect('09690000000')->toBeMyanmarPhoneNumber(); // mytel
});

it('can check mpt number', function () {
    expect('09250000000')->toBeMptNumber();
});

it('can check ooredoo number', function () {
    expect('09970000000')->toBeOoredooNumber();
});

it('can check telenor number', function () {
    expect('09790000000')->toBeTelenorNumber();
});

it('can check mec number', function () {
    expect('0930000000')->toBeMecNumber();
});

it('can check mytel number', function () {
    expect('09690000000')->toBeMytelNumber();
});

it('can normalize', function () {
    expect(phoneNumber()->normalize(phone: '09250000000'))->toBeMyanmarPhoneNumber();
    expect(phoneNumber()->normalize(phone: '(၀၉)၂၅၀၀၀၀၀၀၀'))->toBeMyanmarPhoneNumber();
    expect(phoneNumber()->normalize(phone: '၀၉-၂၅၀၀၀၀၀၀၀'))->toBeMyanmarPhoneNumber();
    expect(phoneNumber()->normalize(phone: '09-၂၅ဝရဝရဝရဝ'))->toBeMyanmarPhoneNumber();
});

it('can get telecom', function () {
    expect(phoneNumber()->getTelecom(phone: '09250000000'))->toBe(Telecom::MPT->getValue());
    expect(phoneNumber()->getTelecom(phone: '09970000000'))->toBe(Telecom::OOREDOO->getValue());
    expect(phoneNumber()->getTelecom(phone: '09790000000'))->toBe(Telecom::TELENOR->getValue());
    expect(phoneNumber()->getTelecom(phone: '0930000000'))->toBe(Telecom::MEC->getValue());
    expect(phoneNumber()->getTelecom(phone: '09690000000'))->toBe(Telecom::MYTEL->getValue());
});

it('can get network type', function () {
    expect(phoneNumber()->getNetworkType(phone: '09250000000'))->toBe(Network::GSM->getValue());
});
