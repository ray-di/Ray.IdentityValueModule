<?php
namespace Ray\IdentityValueModule;

use DateTime;
use InvalidArgumentException;

final class DbDateTime implements DbDateTimeInterface
{
    public function __invoke(string $iso8601DateTime) : string
    {
        $dateTime = DateTime::createFromFormat(DateTime::ATOM, $iso8601DateTime);
        if (! $dateTime instanceof DateTime) {
            throw new InvalidArgumentException($iso8601DateTime);
        }

        return $dateTime->format(Now::MYSQL_DATETIME);
    }
}
