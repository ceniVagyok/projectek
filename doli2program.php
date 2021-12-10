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
            $tantargyak = explode(",", $_GET["tant"]);
            foreach($tantargyak as $a){
                echo ucfirst($a) . " " .strlen($a) . "<br/>";
            }
        ?>
    </body>
</html>