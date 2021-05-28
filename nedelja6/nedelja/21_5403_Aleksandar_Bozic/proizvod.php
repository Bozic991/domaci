<style>
    div{  
        width:200px;
        /* float: left; */
        display: inline-block;
    }
    .crvena{
        color:red;
    }
    .zelena{
        color:green;
    }
    img{
        height: 200px;
        width:200px;
    }
</style>
<?php
    function pravi_div($ime, $slika, $cena, $popust){
        echo "<div><img src=$slika>";
        echo "<br>";
        echo $ime;
        if($popust>0){
            $nova_cena=$cena -$popust;
            echo "<p class=crvena>$cena</p>";
            echo "<p class=zelena>$nova_cena</p>";
        }
        elseif($popust==0){
            echo "<p>$cena</p>";
        }
        echo "</div>";
    }
?>