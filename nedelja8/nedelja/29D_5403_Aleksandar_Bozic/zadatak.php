<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    class SastojakHrane{
        public $naziv, $mera, $kalorije;

        public function __construct($naziv, $mera, $kalorije){
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }
        public function promeniMeru($nova_mera){
            $this->mera = $nova_mera;
        }

        public function prikazi(){
            echo "<p>Naziv je ".$this->naziv.", mera je ".$this->mera." kalorije su ".$this->kalorije."</p>";
        }
    }

    class Jelo{
        public $naslov;
        public $opis;
        public $podaci;

        public function __construct($naslov, $opis, $niz_sastojaka){
            $this->naslov = $naslov;
            $this->opis = $opis;
            foreach($niz_sastojaka as $sastojak){
                $this->podaci[] = new SastojakHrane($sastojak['naziv'], $sastojak['mera'], $sastojak['kalorije']);
            }
            
           
        }
        public function prikazi(){
            foreach($this->podaci as $sastojak){
                $sastojak->prikazi();
            }
        }
        public function promeniMeru($naziv, $mera){
            foreach($this->podaci as $sastojak){
                if($naziv == $sastojak->naziv){
                    $sastojak->promeniMeru($mera);
                }
            }
        }
        
    }
    $podaci = [
        ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
        ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
        ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
        ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
    ];

    $jelo = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    $jelo->promeniMeru("brasno", "400g");
    $jelo->prikazi();

   
    
    
?>