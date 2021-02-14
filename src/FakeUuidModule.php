<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use Ray\Di\AbstractModule;

class FakeUuidModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(UuidInterface::class)->to(FakeUuid::class);
    }
}
