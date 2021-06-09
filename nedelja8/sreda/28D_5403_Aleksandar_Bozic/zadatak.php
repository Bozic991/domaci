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
    include "Krevet.php";
        class Baldahin extends Krevet{
            public $visina;
            public $cenaBaldahina;

            public function __construct($duzina, $sirina, $materijal, $cena,$visina, $cenaBaldahina){
                $this->visina = $visina;
                $this->cenaBaldahina = $cenaBaldahina;
                parent::__construct($duzina, $sirina, $materijal, $cena);

            }
            public function __toString(){
                return "cena kreveta bez baldahina je ".$this->citanje_cene()." i cena kreveta sa baldahinom je ".($this->citanje_cene()+$this->cenaBaldahina);
            }
        
        }
        $novi_krevet = new Baldahin(200, 200, "iverica", 1500, 300, 200);
        echo $novi_krevet->__toString();


    ?>
</body>
</html>