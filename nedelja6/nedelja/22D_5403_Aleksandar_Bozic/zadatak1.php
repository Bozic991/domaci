<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for) -->
    <?php
        $x=array(12,13,43,123,125,556);

        function brojevi($x){
            $dvocifreni = 0;
            $trocifreni = 0;
            for($i=0; $i<count($x); $i++){
                if(strlen($x[$i])==2){
                    $dvocifreni++;
                }
                if(strlen($x[$i])==3){
                    $trocifreni ++;
                }
            }
            if($dvocifreni>$trocifreni){
                echo "ima vise dvocifrenih $dvocifreni";
            }
            elseif($dvocifreni<$trocifreni){
                echo "ima vise trocifrenih $trocifreni";
            }
            else{
                echo "ima isto dvocifrenih i trocifrenih $dvocifreni = $trocifreni";
            }
        }
        brojevi($x);
    ?>
</body>
</html>