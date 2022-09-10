<?php

namespace Tests\Unit;

use Illuminate\Testing\TestView;
use Tests\TestCase;


class RepositoryControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testView()
    {
        $view = $this->view('repositories', ["repositories" => [
            [
                'name' => 'masterstart/coding-tests',
                'url' => 'https://github.com/masterstart/coding-tests',
                'description' => 'A collection of MasterStart interview tests',
                'stars' => 0,
            ]
        ],
            "repo_type" => "local"]);

        $view->assertSee('A collection of MasterStart interview tests');
    }

    public function testIndex()
    {
        $response = $this->get('/repositories/local');

        $response->assertStatus(200);
    }
}
