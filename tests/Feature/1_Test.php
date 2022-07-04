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
}