<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A news test.
     *
     * @return void
     */
    public function testGetAllNews()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }
}
