<?php

namespace Tests\Browser;
use App\User;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PruebasUTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
     public function testLogin1()
    {
        $this->browse(function (Browser $browser) {
            $browser ->visit('/login')
                    ->type ('usuario','baf21')
                    ->type ('contra','123456')
                    ->type ('pin','2117')
                    ->press('ingresar')
                    ->assertPathIs('/mostrar'); 

            $browser ->visit('/mostrar')
                    ->select ('cuenta','1')
                    ->press('elegir')
                    ->assertPathIs('/mostrar');


           $browser->visit('/transferencias')
                    ->select ('cuenta','2')
                    ->type ('monto','50')
                    ->press('transferir')
                    ->assertPathIs('/saldo');

            $browser->visit('/credito')
                    ->select ('cuenta','2')
                    ->type ('monto','50')
                    ->type ('des','descripcion prueba unitaria')
                    ->press('credito')
                    ->assertPathIs('/saldo');

            $browser->visit('/debito')
                    ->select ('cuenta','2')
                    ->type ('monto','50')
                    ->type ('des','descripcion prueba unitaria')
                    ->press('debito')
                    ->assertPathIs('/saldo');
        });
    }

 

}
