<?php

namespace LaravelMyanmarTools\PhoneNumber\Enums;

enum Telecom
{
    case ALL;
    case MPT;
    case OOREDOO;
    case TELENOR;
    case MEC;
    case MYTEL;

    public function getRegex(): string
    {
        return match ($this) {
            Telecom::ALL => '/^(09|\+?950?9|\+?95950?9)\d{7,9}$/',
            Telecom::MPT => '/^(09|\+?959)(2[0-4]\d{5}|5[0-6]\d{5}|8[13-7]\d{5}|4[1379]\d{6}|73\d{6}|91\d{6}|25\d{7}|26[0-5]\d{6}|40[0-4]\d{6}|42\d{7}|44[0-589]\d{6}|45\d{7}|87\d{7}|89[6789]\d{6})$/',
            Telecom::OOREDOO => '/^(09|\+?959)9\d{8}$/',
            Telecom::TELENOR => '/^(09|\+?959)7\d{8}$/',
            Telecom::MEC => '/^(09|\+?959)3\d{7}$/',
            Telecom::MYTEL => '/^(09|\+?959)6\d{8}$/',
        };
    }

    public function getValue(): string
    {
        return match ($this) {
            Telecom::ALL => 'myanmar',
            Telecom::MPT => 'mpt',
            Telecom::OOREDOO => 'ooredoo',
            Telecom::TELENOR => 'telenor',
            Telecom::MEC => 'mec',
            Telecom::MYTEL => 'mytel',
        };
    }
}
