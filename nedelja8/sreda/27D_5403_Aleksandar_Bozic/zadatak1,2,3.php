<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        $bracni_krevet = new Krevet(200, 160, "drvo", 1000);
        $deciji_krevet = new Krevet(180, 120, "metal", 500);

        if($bracni_krevet->citanje_cene()>$deciji_krevet->citanje_cene()){
            echo $bracni_krevet->__toString();
            echo "<br>";
        }
        else{
            echo $deciji_krevet->__toString();
            echo "<br>";
        }

        $pomocni_lezaj = new Krevet(180, 100, "metal", 400);
        echo $pomocni_lezaj->__toString();
        echo "<br>";

        $pomocni_lezaj->popust(50);
        echo $pomocni_lezaj->__toString();

    ?>
</body>
</html>