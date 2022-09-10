<?php

namespace App\Factories;


use App\Contracts\RepositoryProviderInterface;
use App\Services\GitHubProvider;
use App\Services\LocalProvider;

class RepositoryProviderFactory
{
    /**
     * @param $type
     * @return RepositoryProviderInterface
     * @throws \Exception
     */
    public function make($type)
    {
        $provider = null;

        if ($type == GitHubProvider::PROVIDER_NAME) {
            $provider = app(GitHubProvider::class);
        } elseif ($type == LocalProvider::PROVIDER_NAME) {
            $provider = app(LocalProvider::class);
        }

        return $provider;


    }

}
