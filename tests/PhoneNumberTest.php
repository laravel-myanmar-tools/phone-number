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

it('can get extract myanmar phone number', function () {
    expect(phoneNumber()->extractMyanmarPhoneNumber(str: 'မောင်မောင်ရဲ့ ဖုန်းနံပါတ်များမှာ ၀၉၂၅၀၀၀၀၀၀၀ နှင့် ၀၉၉၇၀၀၀၀၀၀၀ တို့ဖြစ်ပါသည်။'))
        ->toBe(['09250000000', '09970000000']);
    expect(phoneNumber()->extractMyanmarPhoneNumber(str: ''))
        ->toBe([]);
});

it('can get extract mpt', function () {
    expect(phoneNumber()->extractMpt(str: 'မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09250000000 ဖြစ်ပါသည်။'))
        ->toBe(['09250000000']);
});

it('can get extract ooredoo', function () {
    expect(phoneNumber()->extractOoredoo(str: 'မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09970000000 ဖြစ်ပါသည်။'))
        ->toBe(['09970000000']);
});

it('can get extract telenor', function () {
    expect(phoneNumber()->extractTelenor(str: 'မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09790000000 ဖြစ်ပါသည်။'))
        ->toBe(['09790000000']);
});

it('can get extract mec', function () {
    expect(phoneNumber()->extractMec(str: 'မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 0930000000 ဖြစ်ပါသည်။'))
        ->toBe(['0930000000']);
});

it('can get extract mytel', function () {
    expect(phoneNumber()->extractMytel(str: 'မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09690000000 ဖြစ်ပါသည်။'))
        ->toBe(['09690000000']);
});
