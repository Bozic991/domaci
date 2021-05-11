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
        $a = mt_rand(1, 10);
        $b = mt_rand(1, 10);
        $c = mt_rand(1, 10);



    ?>
    <table border=1>
        <tr>
            <td><?=$a?></td>
            <td><?=$a * $a?></td>
        </tr>
        
        <tr>
            <td><?=$b?></td>
            <td><?=$b * $b?></td>
        </tr>

        <tr>
            <td><?=$c?></td>
            <td><?=$c * $c?></td>
        </tr>
    </table>
    
</body>
</html>