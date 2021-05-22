<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom. -->
    <?php

        $a=30;
        $proizvod = 1; 
       
        while($proizvod<100000){
            $poslednji = $proizvod;
            $proizvod*=$a;
            $a--;
            $broj = $proizvod / $poslednji;
        }
        echo "<p style=color:red>".$proizvod."</p>";
        echo "<p style=color:green>".$broj."</p>";

    ?>
</body>
</html>
