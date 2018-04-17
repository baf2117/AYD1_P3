<?php

namespace Tests\Browser;
use App\User;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistroTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
     public function testRegistro()
    {
        $this->browse(function (Browser $browser) {
            $browser ->visit('/registro')
                    ->type ('nombre','prueba unitaria')
                    ->type ('correo','prueba@gmail.com')
                    ->type ('usuario','prueba1')
                    ->type ('contra','123')
                    ->press('registro')
                    ->assertSee('su pin de seguridad es');

        });
    }

 

}
