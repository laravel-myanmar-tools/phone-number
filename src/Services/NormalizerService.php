<?php

namespace LaravelMyanmarTools\PhoneNumber\Services;

class NormalizerService
{
    public function __construct(
        public string $str
    ) {
    }

    public function normalize(): string
    {
        $str = $this->str;

        // replace myanmar to english
        $myanmar = ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉', 'ဝ', 'ရ'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '7'];
        $str = str_replace(
            search: $myanmar,
            replace: $english,
            subject: $str
        );

        // clean whitespace and dash
        $str = preg_replace(
            pattern: '/[- )(]/',
            replacement: '',
            subject: $str
        );

        // clean doule country code
        $replacer = '+959'.preg_replace(
            pattern: '/^\+?95959/',
            replacement: '',
            subject: $str
        );
        $str = preg_replace(
            pattern: '/^\+?95950?9\d{7,9}$/',
            replacement: $replacer,
            subject: $str
        );

        // clean zero before country code
        $replacer = preg_replace(
            pattern: '/9509/',
            replacement: '959',
            subject: $str
        );
        $str = preg_replace(
            pattern: '/^\+?9509\d{7,9}$/',
            replacement: $replacer,
            subject: $str
        );

        return $str;
    }
}
