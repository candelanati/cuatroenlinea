<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PiezaTest extends TestCase
{

    public function test_whitePieza()
    {
        $whitePieza = new Pieza("⬜");

        $this->assertTrue($whitePieza->getColor() == "⬜");
    }

    public function test_bluePieza()
    {
        $bluePieza = new Pieza("🟦");

        $this->assertTrue($bluePieza->getColor() == "🟦");
    }

    public function test_redPieza()
    {
        $PiezaRoja = new Pieza("🟥");

        $this->assertTrue($PiezaRoja->getColor() == "🟥");
    }
}
