<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

use Ray\Di\AbstractModule;

class FakeIdentityValueModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(UuidInterface::class)->to(FakeUuid::class);
        $this->bind(NowInterface::class)->to(FakeNow::class);
    }
}
