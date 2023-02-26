<?php

namespace LaravelMyanmarTools\PhoneNumber\Concerns;

use LaravelMyanmarTools\PhoneNumber\Enums\Network;
use LaravelMyanmarTools\PhoneNumber\Exceptions\InvalidMyanmarPhoneNumber;
use LaravelMyanmarTools\PhoneNumber\Services\RegexService;

trait CanGetNetworkType
{
    public function getNetworkType(string $phone): string
    {
        $regexService = new RegexService(str: $phone);

        if (! $regexService->isMyanmarPhoneNumber($phone)) {
            throw new InvalidMyanmarPhoneNumber('Invalid myanmar phone number!');
        }

        if (
            $regexService->isOoredoo()
            || $regexService->isTelenor()
            || $regexService->isMytel()
        ) {
            return Network::GSM->getValue();
        }

        if ($regexService->isMpt()) {
            // check wcdma
            if ($regexService->isWcdma()) {
                return Network::WCDMA->getValue();
            }

            // check cdma 450
            if ($regexService->isCdma450()) {
                return Network::CDMA_450->getValue();
            }

            // check cdma 800
            if ($regexService->isCdma800()) {
                return Network::CDMA_800->getValue();
            }

            return Network::GSM->getValue();
        }

        return Network::UNKNOWN->getValue();
    }
}
