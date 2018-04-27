<?php

namespace Tests\Browser;
use App\User;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ErrorTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
     public function testerrores1()
    {
        $this->browse(function (Browser $browser) {

            $browser ->visit('/login')
                    ->type ('usuario','baf22')
                    ->type ('contra','123456')
                    ->type ('pin','2117')
                    ->press('ingresar')
                    ->assertPathIs('/login'); 

            $browser ->visit('/login')
                    ->type ('usuario','baf21')
                    ->type ('contra','123456')
                    ->type ('pin','2117')
                    ->press('ingresar')
                    ->assertPathIs('/mostrar');

            $browser ->visit('/mostrar')
                    ->select ('cuenta','1')
                    ->press('elegir')
                    ->assertPathIs('/transferencias');


           $browser->visit('/transferencias')
                    ->select ('cuenta','2')
                    ->type ('monto','500000')
                    ->press('transferir')
                    ->assertSee('No se cuenta con el saldo suficiente para realizar la transaccion');

            $browser->visit('/credito')
                    ->select ('cuenta','2')
                    ->type ('monto','5000000')
                    ->type ('des','descripcion prueba unitaria')
                    ->press('credito')
                    ->assertSee('No se cuenta con el saldo suficiente para realizar la transaccion');

            $browser->visit('/debito')
                    ->select ('cuenta','2')
                    ->type ('monto','50000000')
                    ->type ('des','descripcion prueba unitaria')
                    ->press('debito')
                    ->assertSee('No se cuenta con el saldo suficiente para realizar la transaccion');
        });
    }

 

}
