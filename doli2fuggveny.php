<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dolgozat</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        function szerkeztheto($a, $b, $c){
            if($a + $b > $c && $c + $b > $a && $a + $c > $b) return true;
            else return false;
        }
        function derekszogu($a, $b, $c){
            if($a * $a + $b * $b == $c * $c) return true;
            if($a * $a + $c * $c == $b * $b) return true;
            if($c * $c + $b * $b == $a * $a) return true;
            else return false;
        }
        ?>
    </body>
</html>