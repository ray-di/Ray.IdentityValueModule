<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use DateTimeImmutable;
use DateTimeInterface;
use Ray\Di\AbstractModule;

class FakeNowModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(NowInterface::class)->to(FakeNow::class);
        $this->bind(DateTimeInterface::class)->toInstance(new DateTimeImmutable(FakeNow::VALUE));
    }
}
