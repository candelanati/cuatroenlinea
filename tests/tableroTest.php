<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TableroTest extends TestCase
{
    public function test_emptyTablero() {
        $Tablero = new Tablero();

        $white = new Pieza("⬜");

        $empty = [[$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white]];

        $this->assertEquals($Tablero->getBoard(), $empty);

    }

    public function test_ponerPiezas() {
        $Tablero = new Tablero();

        $blue = new Pieza("🟦");
        $red = new Pieza("🟥");
        $white = new Pieza("⬜");

        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(1,$red);
        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(2,$red);
        $Tablero->ponerPieza(2,$red);
        $Tablero->ponerPieza(3,$red);
        $Tablero->ponerPieza(5,$blue);
        $Tablero->ponerPieza(5,$red);
        $Tablero->ponerPieza(5,$blue);
        $Tablero->ponerPieza(6,$red);

        $res = [[$white , $white, $white, $white, $white, $white],
                [$white , $white, $white, $white, $white, $white],
                [$blue , $white, $white, $white, $white, $white],
                [$red , $white, $white, $white, $white, $white],
                [$blue , $white, $white, $white, $white, $white],
                [$blue , $white, $white, $white, $white, $white],
                [$blue , $white, $white, $white, $white, $white],];

        $this->assertEquals($Tablero->getBoard(), $res);

    }
    public function test_removePiezas() {
        $Tablero = new Tablero();

        $blue = new Pieza("🟦");
        $red = new Pieza("🟥");
        $white = new Pieza("⬜");


        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(1,$red);
        $Tablero->ponerPieza(1,$blue);
        $Tablero->ponerPieza(2,$red);
        $Tablero->ponerPieza(2,$red);
        $Tablero->ponerPieza(3,$red);
        $Tablero->ponerPieza(5,$blue);
        $Tablero->ponerPieza(5,$red);
        $Tablero->ponerPieza(5,$blue);
        $Tablero->ponerPieza(6,$red);

        $Tablero->borrarPieza(1);
        $Tablero->borrarPieza(1);
        $Tablero->borrarPieza(1);
        $Tablero->borrarPieza(1);
        $Tablero->borrarPieza(1);
        $Tablero->borrarPieza(2);
        $Tablero->borrarPieza(2);
        $Tablero->borrarPieza(3);
        $Tablero->borrarPieza(5);
        $Tablero->borrarPieza(6);
        $Tablero->borrarPieza(5);
        $Tablero->borrarPieza(5);


        $empty = [[$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white],
                  [$white, $white, $white, $white, $white, $white]];

        $this->assertEquals($Tablero->getBoard(), $empty);

    }
}