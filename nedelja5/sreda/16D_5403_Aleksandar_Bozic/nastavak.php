<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 2(nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).
3(nastavak) Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći. -->
    <?php
        $a = $_GET['prvi'];
        $b = $_GET['drugi'];
        $c = $_GET['treci'];
        $d = $_GET['cetvrti'];

        function zbir(){
            global $a, $b, $c, $d;
            if($b>$a && $d>$c){
                $z = 0;
                for($i = $a; $i<$b; $i++){
                    if($i % 4 == 0){
                    $z = $z + $i;
                    }
                }
                $z1 = 0;
                for($i1 = $c; $i1<$d; $i1++){
                    if($i1 % 3 ==0){
                    $z1 = $z1 + $i1;
                    }
                } 
                if($z>$z1){
                    echo "veci zbir je $z";
                }
                else {
                    echo "veci zbir je $z1";
                }
            }
            else{
                echo "greska";
            }
        }
        zbir();
    ?>
</body>
</html> 

