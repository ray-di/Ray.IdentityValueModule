<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use Ray\Di\AbstractModule;

class FakeNowModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(NowInterface::class)->to(FakeNow::class);
    }
}
