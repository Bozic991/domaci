<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         div{border:1px solid red;}
    </style>
</head>
<body>
    <?php
        $n = mt_rand(1, 10);
        $x = mt_rand(1, 10);
        echo "$n, $x<br>";

        function span(){
            global $n, $x;
            echo "<div>";
                for($i=1; $i<=$n; $i++){
                    echo "<span>Ovo je span $i</span><br>";
                }
            echo "</div>";
            
        }
        for($i1=1; $i1<=$x; $i1++){
            span();
        }
    ?>
</body>
</html>