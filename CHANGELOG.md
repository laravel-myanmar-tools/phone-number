# Changelog

All notable changes to `phone-number` will be documented in this file.

## v1.1.0 - 2023-02-26

add extract feature

```php
use LaravelMyanmarTools\PhoneNumber\PhoneNumber;

$phoneNumber = new PhoneNumber;
$phoneNumber->extractMyanmarPhoneNumber('မောင်မောင်ရဲ့ ဖုန်းနံပါတ်များမှာ ၀၉၂၅၀၀၀၀၀၀၀ နှင့် ၀၉၉၇၀၀၀၀၀၀၀ တို့ဖြစ်ပါသည်။'); 
// return ["09250000000", "09970000000"]

```
## v1.0.1 - 2023-02-18

### What's Changed

- Bump aglipanci/laravel-pint-action from 1.0.0 to 2.1.0 by @dependabot in https://github.com/Laravel-Myanmar-Tools/phone-number/pull/1
- Bump dependabot/fetch-metadata from 1.3.5 to 1.3.6 by @dependabot in https://github.com/Laravel-Myanmar-Tools/phone-number/pull/2

### New Contributors

- @dependabot made their first contribution in https://github.com/Laravel-Myanmar-Tools/phone-number/pull/1

**Full Changelog**: https://github.com/Laravel-Myanmar-Tools/phone-number/compare/v1.0.0...v1.0.1

## v1.0.0 - 2022-11-27

**Full Changelog**: https://github.com/Laravel-Myanmar-Tools/phone-number/commits/v1.0.0
