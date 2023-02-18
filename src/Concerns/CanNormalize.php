<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Exceptions\InvalidMyanmarPhoneNumber;

trait CanNormalize
{
    public function normalize(string $phone, string $prefix = '09'): string
    {
        // replace myanmar to english
        $myanmar = ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉', 'ဝ', 'ရ'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '7'];
        $phone = str_replace(
            search: $myanmar,
            replace: $english,
            subject: $phone
        );

        // clean whitespace and dash
        $phone = preg_replace(
            pattern: '/[- )(]/',
            replacement: '',
            subject: $phone
        );

        // clean doule country code
        $replacer = '+959'.preg_replace(
            pattern: '/^\+?95959/',
            replacement: '',
            subject: $phone
        );
        $phone = preg_replace(
            pattern: '/^\+?95950?9\d{7,9}$/',
            replacement: $replacer,
            subject: $phone
        );

        // clean zero before country code
        $replacer = preg_replace(
            pattern: '/9509/',
            replacement: '959',
            subject: $phone
        );
        $phone = preg_replace(
            pattern: '/^\+?9509\d{7,9}$/',
            replacement: $replacer,
            subject: $phone
        );

        if (! $this->isMyanmarPhoneNumber($phone)) {
            throw new InvalidMyanmarPhoneNumber('Invalid myanmar phone number!');
        }

        $phone = preg_replace('/^\+?959|09/', $prefix, $phone);

        return $phone;
    }
}
