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
        echo "<table border=1>";
        for($i=1; $i<=6; $i++){
            if($i%2==0){
                echo "<tr>";
                    for($j=1; $j<=12; $j++){
                        if($j%3==0){
                            echo "<td>$i - $j</td>";
                        }    
                    }
                echo "</tr>";
            }
        }
        echo "</table>";

    ?>
</body>
</html>