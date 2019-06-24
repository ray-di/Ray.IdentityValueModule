<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

use Ray\Di\AbstractModule;

class IdentityValueModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(UuidInterface::class)->to(Uuid::class);
        $this->bind(NowInterface::class)->to(Now::class);
        $this->bind(DbDateTimeInterface::class)->to(DbDateTime::class);
        $this->bind(Iso8601Interface::class)->to(Iso8601::class);
    }
}
