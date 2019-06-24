<?php
namespace Ray\IdentityValueModule;

interface DbDateTimeInterface
{
    /**
     * Convert ISO8601 datetime to MySql datetime format
     */
    public function __invoke(string $iso8601DateTime) : string;
}
