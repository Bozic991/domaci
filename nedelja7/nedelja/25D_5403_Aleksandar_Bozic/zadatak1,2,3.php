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
        $x = [ 
            ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
            ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
            ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
            ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
           ];
        
        // zadatak 1. Dodati u gornji niz jos 4 osobe po zelji.
        $x[4]= ['ime'=>"Sale", "godine"=>29, "grad"=>"SM", "pozicija"=>"pravnik"];
        $x[5]= ['ime'=>"Vlada", "godine"=>33, "grad"=>"Bg", "pozicija"=>"programer"];
        $x[6]= ['ime'=>"Marko", "godine"=>40, "grad"=>"Ruma", "pozicija"=>"sluzbenik"];
        $x[7]= ['ime'=>"Nikola", "godine"=>18, "grad"=>"Sid", "pozicija"=>"sportista"];
                
        print_r($x);
        echo "<br><br>";


        // zadatak 2. Napisati fju koja prikazuje imena svih programera.
        function imena_programera($x){
            for($i=0; $i<count($x); $i++){
                if($x[$i]["pozicija"]=="programer"){
                    echo $x[$i]['ime']." ,";
                }
            }
        }
        echo "imena programera su: ";
        imena_programera($x);
        echo "<br><br>";



        // zadatak 3. Napisati fju koja prikazuje sve podatke neke date osobe. 
        // Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.
        function svi_podaci_neke_osobe($x, $ime){
            foreach($x as $ind=> $osoba){
                if($osoba['ime']==$ime){
                    echo "<pre>";
                    print_r($osoba);
                    echo "</pre>";
                }
            }
        }
        svi_podaci_neke_osobe($x, "Vlada");
        echo "<br><br>";

        foreach($x as $ind=> $osoba){
            if(stripos($osoba['ime'], 's')!==false){
                svi_podaci_neke_osobe($x, $osoba['ime']);
            }
        }

    ?>
</body>
</html>