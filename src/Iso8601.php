<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use DateTime;

use function assert;
use function in_array;
use function is_string;

final class Iso8601 implements Iso8601Interface
{
    /**
     * {@inheritdoc}
     */
    public function convertOne(string $dateTime): string
    {
        return (new DateTime($dateTime))->format(DateTime::ATOM);
    }

    /**
     * {@inheritdoc}
     */
    public function convertList(array $assocList, array $columns): array
    {
        $list = $assocList;
        foreach ($list as &$row) {
            foreach ($row as $column => &$value) {
                assert(is_string($value));
                if (in_array($column, $columns, true)) {
                    $value = (new DateTime($value))->format(DateTime::ATOM);
                }
            }
        }

        return $list;
    }
}
