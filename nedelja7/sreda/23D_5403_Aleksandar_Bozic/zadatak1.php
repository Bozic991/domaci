<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .zeleni{
            color:green;
        }
        .crveni{
            color:red;
        }
    </style>
</head>
<body>
<!-- Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz. -->
    <?php
        $x=["Fiorentina", "Juventus", "Internazionale", "Roma", "Lece"];
        $y=[];

        for($i=0; $i<count($x); $i++){
            if(strlen($x[$i])>5){
                array_push($y, "<span class='zeleni'>".$x[$i]."</span>");
            }
            if(strlen($x[$i])<5){
                // echo "<span class='crveni'>".$x[$i]."</span>";
                array_push($y, "<span class='crveni'>".$x[$i]."</span>");
            }
        }
        print_r($y);
    ?>
</body>
</html>