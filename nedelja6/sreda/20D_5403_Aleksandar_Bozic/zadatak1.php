<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function numbers($x, $y, $z){
            if($x>$y && $x > $z){
                return $x;
            }
            if($y>$x && $y > $z){
                return $y;
            }
            return $z;
        }
        echo numbers(11, 5, 8);
    ?>
</body>
</html>