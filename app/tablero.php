<?php

namespace App;

include 'pieza.php';

interface InterfaceTablero {
    public function getX () : int;
    public function getY () : int;
    public function limpiaTablero();
    public function hayPieza(int $x, int $y) : bool;
    public function getPieza(int $x, int $y) : Piece;
    public function ponerPieza(int $x, Piece $piece);
    public function borrarPieza(int $x);
}

class Tablero implements InterfaceTablero {
    protected $board;
    protected $lenX = 7;
    protected $lenY = 6;
    
    public function __construct() {
        $this->limpiaTablero();
    }

    public function getBoard() {
        return $this->board;
    }
    
    public function getX() : int{
        return $this->lenX;
    }

    public function getY() : int{
        return $this->lenY;
    }
    
    public function limpiaTablero(){
        for($x = 0; $x < $this->getX(); $x++){
            for($y = 0; $y < $this->getY(); $y++){
                $this->board[$x][$y] = "⬜";
            }
        }
    }
    
    public function hayPieza(int $x, int $y) : bool {
        return $this->board[$x][$y] != "⬜";
    }

    public function getPieza(int $x, int $y) : Piece {
        return $this->board[$x][$y];
    }

    public function ponerPieza(int $x, Piece $piece){
        $x--;
        for($y = $this->getY()-1; $y >= 0; $y--){
            if(!($this->hayPieza($x, $y))){
                $this->board[$x][$y] = $piece;
                break;
            }
        }
    }

    public function borrarPieza(int $x){
        $x--;
        for($y = 0; $y < $this->getY(); $y++){
            if($this->hayPieza($x, $y)){
                $this->board[$x][$y] = "⬜";
                break;
            }
        }    
    }

    public function showBoard(){
        print("\n\n");
        for($y = 0; $y < $this->getY(); $y++){
            for($x = 0;$x < $this->getX(); $x++){
                if($this->board[$x][$y] == "⬜")
                    print($this->board[$x][$y]);
                else{
                    print($this->board[$x][$y]->getColor());
                }
            }
            print("\n");
        }
        print("\n\n");
    }
}
?>