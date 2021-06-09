<?php
class Krevet{
            public $duzina;
            public $sirina;
            public $materijal;
            private $cena;

            public function __construct($duzina, $sirina, $materijal, $cena){
                $this->duzina = $duzina;
                $this->sirina = $sirina;
                $this->materijal = $materijal;
                $this->cena = $cena;
            }

            public function citanje_cene(){
                return $this->cena;
            }

            public function __toString(){
                return "Krevet je duzine ".$this->duzina." i sirine ".$this->sirina." napravljen od materijala ".$this->materijal." po ceni ".$this->cena;
            }

            public function popust($x){
                $this->cena=$this->cena - ($this->cena * $x/100);
            }
            
        }
?>