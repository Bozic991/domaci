<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 30px;
            height: 30px;
            border:1px solid black;
        }
    
    </style>
</head>
<body>
    <?php
        $a = mt_rand(1, 64);
        echo $a;
        
        echo "<table>";
            for($i=0; $i<8; $i++){
                echo "<tr>";
                    for($j=1; $j<=8; $j++){
                        $x = ($i*8+$j);
                        if($x==$a){
                            echo "<td style=background-color:black>".$x."</td>";
                        }
                        else{
                            echo "<td>".$x."</td>";
                        }
                    }
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>