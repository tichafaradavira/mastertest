<?php

namespace App\Http\Controllers;


use App\Factories\RepositoryProviderFactory;
use App\Services\GitHubProvider;
use App\Services\LocalProvider;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    private $providerFactory;

    /**
     * RepositoryController constructor.
     * @param RepositoryProviderFactory $providerFactory
     */
    public function __construct(RepositoryProviderFactory $providerFactory)
    {
        $this->providerFactory = $providerFactory;

    }

    /**
     * @param Request $request
     * @param $type
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Exception
     *
     */
    public function index(Request $request, $type)
    {
        $repositories = [];
        if ($type == GitHubProvider::PROVIDER_NAME || $type == LocalProvider::PROVIDER_NAME) {
            $provider = $this->providerFactory->make($type);
            $repositories = $provider->getPopularRepositories();
            return view('repositories', ["repositories" => $repositories, "repo_type" => $provider::PROVIDER_NAME]);

        } else {
            return view('repositories', ["repositories" => $repositories, "repo_type" => "UNKNOWN"]);
        }
    }


}
