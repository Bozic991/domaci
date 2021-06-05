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
    //   1. Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
    $x = array_map(function($osoba){
        for($i=0; $i<count($osoba); $i++){
            $osoba['godine_staza']= mt_rand(1, 3);
        }
        return $osoba;
    }, $x);    
    // echo "<pre>";
    // print_r($x);
    // echo "</pre>";

    
    // 2. Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
    
    usort($x, function($a, $b){
        if($a['godine_staza']==$b['godine_staza']){
                if($a['godine']>$b['godine']){
                    return -1;
                }
                else{
                    return 1;
                }
        }
        if($a['godine_staza']>$b['godine_staza']){
            return -1;
        }
        
        return 1;
        
    });
    function prikazi($x){
        echo "<p>".join(" ,", $x)."</p>";
    }
    foreach($x as $osoba){
        prikazi($osoba);
    }
    

    // 3. Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)
    
        $max = ['godine_staza'=>0];
        foreach($x as $osoba){
            if($max['godine_staza'] < $osoba['godine_staza']){
                $max= $osoba;
            }
        }

    echo "<br>";

    $osobe_sa_najvcim_stazom= array_filter($x, function($osoba){
        global $max;
        if($osoba['godine_staza']== $max['godine_staza'])
            return true;
        else
            return false;
    });

    echo "<pre>";
    print_r($osobe_sa_najvcim_stazom);
    echo "</pre>";    


    ?>
</body>
</html>