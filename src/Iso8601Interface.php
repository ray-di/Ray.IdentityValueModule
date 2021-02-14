<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

interface Iso8601Interface
{
    /**
     * Convert $dateTime to Iso8601 dateTime
     */
    public function convertOne(string $dateTime) : string;

    /**
     * Convert $dateTime to Iso8601 dateTime from assoc list with selected $columns
     *
     * @param list<array<string, mixed>> $assocList
     * @param list<string>               $columns
     *
     * @return list<array<string, mixed>>
     */
    public function convertList(array $assocList, array $columns) : array;
}
