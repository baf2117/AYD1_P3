<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type ('usuario','baf21')
                    ->type ('contra','123456')
                    ->type ('pin','2117')
                    ->press('ingresar')
                    ->assertPathIs('/aux');
        });
    }

}
