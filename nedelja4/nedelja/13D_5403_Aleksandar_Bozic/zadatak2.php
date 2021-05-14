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
        $a = mt_rand(1, 9);
        $b = mt_rand(1, 9);
        $c = mt_rand(1, 9);
        echo "$a, $b, $c";
        echo "<br>";
        echo "<br>";
        // prvi u nizu
        if($a<=$b && $a<=$c){
            echo $a;
        }
        elseif($b<=$a && $b<=$c){
            echo $b;
        }
        elseif($c<=$a && $c<=$b){
            echo $c;
        }
        
        // drugi u nizu
        if($a>=$b && $a<=$c){
            echo $a;
        }
        elseif($a<=$b && $a>=$c){
            echo $a;
        }
        elseif($b<=$a && $b>=$c){
            echo $b;
        }
        elseif($b>=$a && $b<=$c){
            echo $b;
        }
        elseif($c<=$a && $c>=$b){
            echo $c;
        }
        elseif($c>=$a && $c<=$b){
            echo $c;
        }
        
        // treci u nizu
        if($a>=$b && $a>=$c){
            echo $a;
        }
        elseif($b>=$a && $b>=$c){
            echo $b;
        }
        elseif($c>=$a && $c>=$b){
            echo $c;
        }

    ?>
</body>
</html>