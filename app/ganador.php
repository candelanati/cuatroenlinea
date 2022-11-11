<?php

namespace App;

include 'tablero.php';

interface interfaceGanador{
    public function horizontal();
    public function vertical();
    public function diagonal();
    public function gana();
}

class Ganador implements interfaceGanador{
    protected $tablero;

    public function __construct (Tablero $nuevoTablero) {
        $this->tablero = $nuevoTablero;
    }
    
    public function horizontal(){

    }
    public function vertical(){

    }
    public function diagonal(){

    }
    public function gana(){

    }
}

?>