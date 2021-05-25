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
        function back($N, $M){
            for($i=1; $i<=$N; $i++){
                echo "<div>";
                    for($j=1; $j<=$M; $j++){
                        echo "<span>$j</span>";
                    }
                echo "</div>";
            }
        }
        back(4, 5);


    ?>
</body>
</html>