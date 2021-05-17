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
        $a = 'Aleksandar';
        $b = 'Vladimir';
        function ime(){
            global $a, $b;
           if(strlen($a)>strlen($b)){
               echo $a;
           }
           else{
            echo $b;
            }
        }
        ime();
        echo "<br>";

        function ime2(){
            global $a, $b;
           if(strlen($a)>strlen($b)){
               return $a;
           }
            return $b;
        }
        echo ime2();

        function ime3(){
            global $a, $b;
           if(strlen($a)<strlen($b)){
               return $a;
           }
            return $b;
        }
    ?>
    <br><span style='color:red'><?=ime2()?></span>
    <br><span style='color:green'><?=ime3()?></span>

</body>
</html>

