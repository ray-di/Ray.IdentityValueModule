<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

use function in_array;

final class Iso8601 implements Iso8601Interface
{
    /**
     * {@inheritdoc}
     */
    public function convertOne(string $dateTime) : string
    {
        return (new \DateTime($dateTime))->format(\DateTime::ATOM);
    }

    /**
     * {@inheritdoc}
     */
    public function convertList(array $assocList, array $columns) : array
    {
        $list = $assocList;
        foreach ($list as &$row) {
            /** @var string $value */
            foreach ($row as $column => &$value) {
                if (in_array($column, $columns, true)) {
                    $value = (new \DateTime($value))->format(\DateTime::ATOM);
                }
            }
        }

        return $list;
    }
}
