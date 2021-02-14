<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use DateTimeImmutable;
use DateTimeInterface;
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
        $this->bind(DateTimeInterface::class)->to(DateTimeImmutable::class);
    }
}
