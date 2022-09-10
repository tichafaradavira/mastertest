<?php

namespace Tests\Unit;

use App\Factories\RepositoryProviderFactory;
use Tests\TestCase;


class ProviderTest extends TestCase
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function testGetName()
    {
        $provider = app(RepositoryProviderFactory::class);
        $localObject = $provider->make("local");

        self::assertTrue($localObject->getName() == "local");
    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function testGetPopularRepositories()
    {
        $provider = app(RepositoryProviderFactory::class);
        $localObject = $provider->make("github");

        self::assertCount(10,$localObject->getPopularRepositories());
    }
}
