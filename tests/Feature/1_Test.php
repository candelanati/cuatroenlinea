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
}