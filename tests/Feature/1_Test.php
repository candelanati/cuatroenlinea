<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class myFirstTest extends TestCase
{
    public function test_anda(){

        $pagina_cod = $this->get('https://cuatroenlinea.ddev.site/jugar/1');

        $pagina_cod->assertStatus(200);
    }

    public function test_anda_tablero(){

        $pagina = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1');

        $this->assertTrue(substr_count($pagina,'bg-gray-200') == 41);
    }

    public function test_rojos(){

        $pagina = file_get_contents('https://cuatroenlinea.ddev.site/jugar/257');

        $this->assertTrue(substr_count($pagina,'bg-red-500') == 2);
    }

    public function test_azul(){

        $pagina = file_get_contents('https://cuatroenlinea.ddev.site/jugar/3456');

        $this->assertTrue(substr_count($pagina,'bg-sky-500') == 2);
    }
}