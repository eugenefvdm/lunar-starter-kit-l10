<?php

namespace Tests\Unit\Http\Livewire;

use App\Http\Livewire\Home;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_component_can_mount(): void
    {
        Livewire::test(Home::class)
            ->assertViewIs('livewire.home');
    }
}
