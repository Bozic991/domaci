<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false. -->
<?php
    $x=[4,5,6,8,9,12,0];

    function vraca($x){
        foreach($x as $ind=>$el){
            if($el===0){
                return false;
            }
        }
        return true;
    }
    var_dump(vraca($x));

?>
</body>
</html>