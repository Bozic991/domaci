<?php
    class WebSite{
        function header(){
            echo "<h1><a href='index.php'>Dobro dosli u web shop</a></h1>";
        }
        function footer(){
            echo "<h3>Bolje vas nasli</h3>";
        }
        function meni(){
            ?>
            <a href="index.php">SVE</a><br/>
            <a href="index.php?grupa=milka">MILKA</a><br/>
            <a href="index.php?grupa=zelje">Najlepse ZELJE</a><br/>
            <a href="index.php?grupa=nestle">NESTLE cokolade</a><br/>
            <?php
        }

    }
    $website = new WebSite();



?>