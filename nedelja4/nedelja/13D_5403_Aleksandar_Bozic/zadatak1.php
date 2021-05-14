<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .zeleni {
            color:green;
        }
        .crveni {
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $broj1 = mt_rand(1, 9);
        $broj2 = mt_rand(1, 9);
        if($broj1 > $broj2){
            echo "<span style='color:green';>$broj1<span>";
            echo "<br>";
            echo "<span style= 'color:red';>$broj2<span>";
        }
        else{
            echo "<span style= 'color:red';>$broj1<span>";
            echo "<br>";
            echo "<span style= 'color:green';>$broj2<span>";
        } 
        echo "<br>";
        if($broj1 > $broj2){
            $klasa = "zeleni"; 
            $klasa2 = "crveni";
        }
        else{
            $klasa2 = "zeleni";
            $klasa = "crveni";
        }
    ?>
    <span class="<?=$klasa?>"><?=$broj1?></span>
    <br>
    <span class="<?=$klasa2?>"><?=$broj2?></span>
</body>
</html>