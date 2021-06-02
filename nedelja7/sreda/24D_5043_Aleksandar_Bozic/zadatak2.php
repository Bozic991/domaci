<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak=>28] pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti -->
<?php
    $x=['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];
    
    function najuspesniji($x){
        $najuspesniji=0;
        $ind="";
        foreach($x as $dan=>$broj){
            if($broj>$najuspesniji){
                $najuspesniji=$broj;
                $ind=$dan;
            }
        }
        return $ind;
    }
    echo "najuspesniji je dan: ".najuspesniji($x) ."<br>";

    function prosek($x){
        $zbir=0;
        foreach($x as $dan=>$broj){
            $zbir+=$broj;
            
        }
        return $zbir/count($x);
    }
    echo "prosecna uspesnost je:". prosek($x)."<br>";

    function razlika($x){
        return $x[najuspesniji($x)] - min($x);
    }
    echo "razlika izmedju najbolje i najgore uspesnosti : ".razlika($x);

?>

</body>
</html>