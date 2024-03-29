<?php

namespace Tests\Unit\Http\Livewire\Components;

use App\Http\Livewire\Components\Navigation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Lunar\Models\Collection;
use Lunar\Models\Language;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the component mounts correctly.
     */
    public function test_component_can_mount(): void
    {
        Livewire::test(Navigation::class)
            ->assertViewIs('livewire.components.navigation');
    }

    /**
     * Test we can see our collections.
     */
    public function test_collections_are_visible(): void
    {
        Language::factory()->create([
            'default' => true,
        ]);

        $collections = Collection::factory(5)
            ->hasUrls(1, [
                'default' => true,
            ])->create();

        $component = Livewire::test(Navigation::class)
            ->assertCount('collections', $collections->count())
            ->assertViewIs('livewire.components.navigation');

        foreach ($collections as $collection) {
            $component->assertSee($collection->translateAttribute('name'));
        }
    }
}
