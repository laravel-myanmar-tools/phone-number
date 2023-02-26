<?php

namespace LaravelMyanmarTools\PhoneNumber\Services;

use LaravelMyanmarTools\PhoneNumber\Enums\Network;
use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

class RegexService
{
    public function __construct(
        public string $str
    ) {
    }

    public function isMyanmarPhoneNumber(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Telecom::ALL->getRegex()
        );
    }

    public function isMpt(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Telecom::MPT->getRegex()
        );
    }

    public function isOoredoo(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Telecom::OOREDOO->getRegex()
        );
    }

    public function isTelenor(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Telecom::TELENOR->getRegex()
        );
    }

    public function isMec(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Telecom::MEC->getRegex()
        );
    }

    public function isMytel(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Telecom::MYTEL->getRegex()
        );
    }

    public function isWcdma(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Network::WCDMA->getRegex()
        );
    }

    public function isCdma450(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Network::CDMA_450->getRegex()
        );
    }

    public function isCdma800(): bool
    {
        return $this->checkRegex(
            str: $this->str,
            regex: Network::CDMA_800->getRegex()
        );
    }

    public function extractMyanmarPhoneNumber(): array
    {
        return $this->extractRegex(
            str: $this->str,
            regex: Telecom::ALL->getRegex()
        );
    }

    public function extractMpt(): array
    {
        return $this->extractRegex(
            str: $this->str,
            regex: Telecom::MPT->getRegex()
        );
    }

    public function extractOoredoo(): array
    {
        return $this->extractRegex(
            str: $this->str,
            regex: Telecom::OOREDOO->getRegex()
        );
    }

    public function extractTelenor(): array
    {
        return $this->extractRegex(
            str: $this->str,
            regex: Telecom::TELENOR->getRegex()
        );
    }

    public function extractMec(): array
    {
        return $this->extractRegex(
            str: $this->str,
            regex: Telecom::MEC->getRegex()
        );
    }

    public function extractMytel(): array
    {
        return $this->extractRegex(
            str: $this->str,
            regex: Telecom::MYTEL->getRegex()
        );
    }

    protected function checkRegex(string $str, string $regex): bool
    {
        return boolval(
            preg_match(
                $regex,
                $str
            )
        );
    }

    protected function extractRegex(string $str, string $regex): array
    {
        $regex = preg_replace('/\^|\$/', '', $regex);

        $results = [];
        if (preg_match_all($regex, $str, $results)) {
            return $results[0];
        }

        return [];
    }
}
