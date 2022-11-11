<?php

namespace App;

interface InterfacePieza {
    public function getColor() : string;
}

class Pieza implements InterfacePieza {
    protected $color;    

    public function __construct($inputColor) {
        $this->color = $inputColor;
    }

    public function getColor() : string {
        return $this->color;
    }
}
?>