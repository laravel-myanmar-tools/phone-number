<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Network;
use LaravelMyanmarTools\PhoneNumber\Exceptions\InvalidMyanmarPhoneNumber;

trait CanGetNetworkType
{
    public function getNetworkType(string $phone): string
    {
        if (! $this->isMyanmarPhoneNumber($phone)) {
            throw new InvalidMyanmarPhoneNumber('Invalid myanmar phone number!');
        }

        if (
            $this->isOoredoo(phone: $phone)
            || $this->isTelenor(phone: $phone)
            || $this->isMytel(phone: $phone)
        ) {
            return Network::GSM->getValue();
        }

        if ($this->isMpt(phone: $phone)) {
            // check wcdma
            if (preg_match(
                pattern: Network::WCDMA->getRegex(),
                subject: $phone
            )) {
                return Network::WCDMA->getValue();
            }

            // check cdma 450
            if (preg_match(
                pattern: Network::CDMA_450->getRegex(),
                subject: $phone
            )) {
                return Network::CDMA_450->getValue();
            }

            // check cdma 800
            if (preg_match(
                pattern: Network::CDMA_800->getRegex(),
                subject: $phone
            )) {
                return Network::CDMA_800->getValue();
            }

            return Network::GSM->getValue();
        }

        return Network::UNKNOWN->getValue();
    }
}
