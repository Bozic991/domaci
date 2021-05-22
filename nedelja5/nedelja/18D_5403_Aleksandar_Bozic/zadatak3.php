<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4. -->

    <?php
    
        for($i=30; $i<100; $i++){
            $a=floor($i/10);
            $b=$i-$a*10;
            if($a%3==0 || $b%4==0){
                continue;
            }
            echo $i."<br>";
        }
        
    ?>
</body>
</html>