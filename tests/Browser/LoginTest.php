<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Email')
                    ->type('email', 'sigmaskibidi@test')
                    ->type('password', 'password123')
                    ->press('LOG IN');
        });
    }
}
