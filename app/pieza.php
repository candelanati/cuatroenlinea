<?php

namespace App;

interface InterfacePieza {
    public function getColor() : string;
}

class Piece implements InterfacePieza {
    protected $color;    

    public function __construct($inputColor) {
        $this->color = $inputColor;
    }

    public function getColor() : string {
        return $this->color;
    }
}
?>