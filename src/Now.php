<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use DateTime;

final class Now implements NowInterface
{
    public const MYSQL_DATETIME = 'Y-m-d H:i:s';

    public function __toString(): string
    {
        return (new DateTime())->format(self::MYSQL_DATETIME);
    }

    public function iso8601(): string
    {
        return (new DateTime())->format(DateTime::ATOM); // 2019-06-02T04:38:25+02:00
    }
}
