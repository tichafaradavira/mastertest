<?php

namespace Tests\Unit;

use App\Factories\RepositoryProviderFactory;
use App\Services\LocalProvider;
use Tests\TestCase;


class FactoryTest extends TestCase
{
    /**
     *
     */
    public function testMake()
    {
        $provider = app(RepositoryProviderFactory::class);
        $localObject = $provider->make("local");

        self::assertTrue(get_class($localObject) == LocalProvider::class);

    }

}
