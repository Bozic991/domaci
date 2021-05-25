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
        function back($N){
            $d= "<div>";
            for($a =1; $a<=$N; $a++){
                $d.="<span>$a</span><br>";
            }
            $d.= "</div>";
            return $d;
        }
        echo back(7);


    ?>
</body>
</html>