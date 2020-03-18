# Ray.IdentityValueModule

[![Build Status](https://travis-ci.org/ray-di/Ray.IdentityValueModule.svg?branch=master)](https://travis-ci.org/ray-di/Ray.IdentityValueModule)

## Overview

`Ray.IdentityValueModule` injects identify value such as current time or UUID.

## Installation

### Composer install

    $ composer require ray/identify-value-module
 
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
    private $iso8601;
    
    public function __construct(UuidInterface $uuid, NowInterface $now, Iso8601Interface $iso8601)
    {
        $this->uuid = $uuid;
        $this->now = $now;
        $this->iso8601 = $iso8601;
    }
    
    public function foo()
    {
        (string) $this->>uuid; // 11111111-2222-3333-4444-4fdffa026136
        (string) $this->>now; // 1970-01-01 00:00:00
        $this->now->iso8601() // 2019-06-24T02:43:30+02:00
        
        $this->$iso8601->convertOne('1970-01-01 00:00:00');
        $list = [
            ['a' => 0, 'created' => '1970-01-01 00:00:00'],
            ['a' => 0, 'created' => '1970-01-01 00:00:00']
        ];
        $this->$iso8601->convertList($list, ['created');
        // [
        //     ['a' => 0, 'created' => '1970-01-01T00:00:00+01:00'],
        //     ['a' => 0, 'created' => '1970-01-01T00:00:00+01:00'],
        // ]
    }
}
````
