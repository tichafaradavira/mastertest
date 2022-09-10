<?php


namespace App\Services;


use App\Contracts\RepositoryProviderInterface;

class LocalProvider implements RepositoryProviderInterface
{
    const PROVIDER_NAME = "local";

    /**
     * @return string
     */
    public function getName(): string
    {
        return static::PROVIDER_NAME;

    }

    /**
     * @return array|void
     */
    public function getPopularRepositories()
    {
        return [
            [
                'name' => 'masterstart/coding-tests',
                'url' => 'https://github.com/masterstart/coding-tests',
                'description' => 'A collection of MasterStart interview tests',
                'stars' => 0,
            ]
        ];

    }

}
