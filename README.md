# Ray.IdentityValueModule

## Overview

`Ray.IdentityValueModule` injects identify value such as current time or UUID.

## Installation

### Composer install

    $ composer require ray/indentify-value-module
 
### Module install

```php
use Ray\Di\AbstractModule;
use Ray\IdentityValueModule;

class AppModule extends AbstractModule
{
    protected function configure()
    {
        $this->install(new IdentityValueModule);
        // $this->install(new FakeIdentityValueModule); // for testing
    }
}
```

## Usage

````php
class Foo
{
    private $uuid;
    private $now;
    
    public function __construct(UuidInterface $uuid, NowInterface $now)
    {
        $this->uuid = (string) $uuid; // 11111111-2222-3333-4444-4fdffa026136
        $this->now = (string) $now; // 1970-01-01 00:00:00
    }
}
````