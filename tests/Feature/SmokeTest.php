<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SmokeTest extends TestCase
{
    /** @test */
    public function the_home_page_returns_200_ok()
    {
        $this->get('/')->assertOk();
    }

    /** @test */
    public function the_divisions_index_returns_200_ok()
    {
        $this->get('/divisions')->assertOk();
    }

    /** @test */
    public function a_known_valid_single_division_page_returns_200_ok()
    {
        $this->get('/divisions/tom-clancy')->assertOk();
    }

    /** @test */
    public function a_known_invalid_single_division_page_returns_404_not_found()
    {
        $this->get('divisions/not-a-real-division')
            ->assertNotFound();
    }
}