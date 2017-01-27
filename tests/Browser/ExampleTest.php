<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->assertSee('Laravel')
                ->clickLink('Login')
                ->type('email', 'rafael.paulin@madeiramadeira.com.br')
                ->type('password', 'rafa1210')
                ->click('button[type="submit"]')
                ->assertSee('You are logged in!');
        });
    }
}
