<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). -->
    <?php
        $x=[2, 4, 9, 17, 21, 22];
        $y=[];

        $zbir=0;
        for($i=0; $i<count($x); $i++){
            $zbir+=$x[$i];
        }
        $k=count($x);
        $ar_sredina=$zbir/$k;

        // echo $ar_sredina;

        for($i=0; $i<count($x); $i++){
            if($x[$i]>$ar_sredina){
                array_push($y, $x[$i]);
            }
        }
        var_dump($y);
    ?>
</body>
</html>