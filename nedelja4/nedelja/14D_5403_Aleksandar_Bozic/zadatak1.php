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
        $a = $_GET['IME'];
        $b = $_GET['PREZIME'];

        $i = substr($a, 0, 1);
        $p = substr($b, 0, 1);

        echo "$i. $p.";

    ?>
</body>
</html>