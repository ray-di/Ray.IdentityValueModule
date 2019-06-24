<?php
namespace Ray\IdentityValueModule;

use DateTime;

final class DbDateTime implements DbDateTimeInterface
{
    public function __invoke(string $iso8601DateTime) : string
    {
        return (DateTime::createFromFormat(DateTime::ATOM, $iso8601DateTime))->format(Now::MYSQL_DATETIME);
    }
}
