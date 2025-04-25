<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            // mastiin udah bener
                    ->assertSee('Modul 3')
                    // klik link ke register
                    ->clickLink('Register')
                    // pastikan kita udah di halaman register
                    ->assertPathIs('/register')
                    // isi form register
                    ->type('name', 'Test User')
                    ->type('email', 'sigmaskibidi@test')
                    ->type('password', 'password123')
                    ->type('password_confirmation', 'password123')
                    ->press('REGISTER');
        });
    }
}
