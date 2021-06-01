<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna.  -->
    <?php
        $y=$_GET['niz'];

        function vraca_niz($y){
            $z = explode(" ", $y);
            return $z;
        }
        $x= vraca_niz($y);

        // BBBBB
        function pod_b($x){
            $br=0;
            for($i=0; $i<count($x); $i++){
                if($x[$i]%2==0){
                    $br+=1;
                }
            }
            if($br>=3){
                $ima=true;
            }
            else{
                $ima=false;
            }
            return $ima;
        }
        
        // CCCCCCC
        function pod_c($x){
            for($i=0; $i<count($x); $i++){
                if($x[$i]>=1000){
                    return false;
                }
            }
            return true;
        }
        // var_dump(pod_c($x));
        
        // DDDDDD
        if(pod_b($x)===true && pod_c($x)===true){
            echo "ima sve brojeve manje od 1000 i bar tri parna.";
        }
        else{
            echo "nema sve brojeve manje od 1000 i bar tri parna.";
        }
    ?>
</body>
</html>