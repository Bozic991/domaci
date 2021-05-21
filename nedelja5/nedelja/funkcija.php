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
        $ime= "Aleksandar";
        $prezime= "Bozic";
        function paragraf(){
            global $ime, $prezime;
            echo    "<p>
                        <span>$ime</span>
                        <span>$prezime</span>
                    </p>";
        }
        $a =strlen($ime. $prezime);
        for ($i=1; $i<=$a; $i++){
            paragraf();
        }
    ?>
</body>
</html>
