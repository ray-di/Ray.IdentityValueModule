<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

final class Now implements NowInterface
{
    const MYSQL_DATETIME = 'Y-m-d H:i:s';

    public function __toString() : string
    {
        return (new \DateTime)->format(self::MYSQL_DATETIME);
    }

    public function iso8601() : string
    {
        return (new \DateTime)->format(\DateTime::ATOM); // 2019-06-02T04:38:25+02:00
    }
}
