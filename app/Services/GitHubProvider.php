<?php


namespace App\Services;


use App\Contracts\RepositoryProviderInterface;
use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class GitHubProvider implements RepositoryProviderInterface
{
    const PROVIDER_NAME = "github";

    /**
     * @return string|void
     */
    public function getName()
    {
        return static::PROVIDER_NAME;
    }

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPopularRepositories()
    {
        $repos = [];
        /**
         * Instantiate the third party client used to query the github API
         */
        $client = new \GuzzleHttp\Client();
        $response = $client->get(config('app.github_api')."?q=language:php&sort=stars&order=desc&per_page=10")
            ->getBody();
        $result = json_decode($response, true);

        /**
         * Retrieve only the neccessary keys
         */
        foreach ($result["items"] as $item) {
            /**
             * Change the stargazers_count key to stars
             */
            $item['stars'] = $item['stargazers_count'];
            unset($item['stargazers_count']);

            array_push($repos, Arr::only($item, ['name', 'url', 'description', 'stars']));
        }

        return $repos;

    }

}
