<?php

namespace LaravelMyanmarTools\PhoneNumber\Enums;

enum Network
{
    case GSM;
    case WCDMA;
    case CDMA_450;
    case CDMA_800;
    case UNKNOWN;

    public function getRegex(): string
    {
        return match ($this) {
            Network::WCDMA => '/^(09|\+?959)(55\d{5}|25[2-4]\d{6}|26\d{7}|4(4|5|6)\d{7})$/',
            Network::CDMA_450 => '/^(09|\+?959)(8\d{6}|6\d{6}|49\d{6})$/',
            Network::CDMA_800 => '/^(09|\+?959)(3\d{7}|73\d{6}|91\d{6})$/',
        };
    }

    public function getValue(): string
    {
        return match ($this) {
            Network::GSM => 'gsm',
            Network::WCDMA => 'wcdma',
            Network::CDMA_450 => 'cdma-450',
            Network::CDMA_800 => 'cdma-800',
            Network::UNKNOWN => 'unknow'
        };
    }
}
