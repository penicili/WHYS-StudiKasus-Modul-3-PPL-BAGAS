<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/login')
                    ->assertSee('Email')
                    ->type('email', 'sigmaskibidi@test')
                    ->type('password', 'password123')
                    ->press('LOG IN')
                    ->visit('/notes')
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('title', 'Test Note')
                    ->type('description', 'Capuccino Assasina')
                    ->press('CREATE');
        });
    }
}
