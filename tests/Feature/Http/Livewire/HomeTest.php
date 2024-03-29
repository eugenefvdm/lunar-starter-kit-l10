<?php

namespace Tests\Feature\Http\Livewire;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSeeLivewire('home')
            ->assertSeeLivewire('components.navigation');
    }
}
