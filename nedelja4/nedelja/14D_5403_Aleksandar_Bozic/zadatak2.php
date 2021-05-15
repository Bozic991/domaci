

<!-- Napraviti formu koja u jednom inputu prihvata ime i prezime razdvojene razmakom. Posle slanja forme, prikazati inicijale u obliku I.P. (sad saljem sa uputstvom 😊 za prvo slovo - je lako, za drugo slovo - nadjite poziciju razmaka preko strpos, a onda preko substr uzmete slovo na sledecoj poziciji) -->
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
        $a = $_GET["ime_prezime"];
      
        $i = substr($a, 0, 1);
        $p2= strpos($a, ' ');
        $p3= $p2+1;

        $p= substr($a, $p3, 1);
        
       
        echo "$i.$p.";



    ?>
</body>
</html>