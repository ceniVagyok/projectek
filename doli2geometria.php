<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once("doli2fuggveny.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dolgozat</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $oldalak = array(
                array( 6, 8, 10),
                array( 1, 2, 3),
                array(rand(1, 100), rand(1, 100), rand(1, 100))
            );
            echo "<table border=1>";
            echo "<th>" . "a oldla" . "</th>";
            echo "<th>" . "b oldal" . "</th>";
            echo "<th>" . "c oldal" . "</th>";
            echo "<th>" . "Szerkezthető-e a háromszög?" . "</th>";
            echo "<th>" . "Derékszögű-e a háromszög?" . "</th>";
            for($i = 0; $i < count($oldalak); $i++){
                echo "<tr>";
                    foreach($oldalak[$i] as $oldal){
                        echo "<td>" . $oldal . "</td>";
                    
                    }
                    if(szerkeztheto($oldalak[$i][0], $oldalak[$i][1], $oldalak[$i][2]))
                    {
                    echo "<td>szerkezthető</td>";
                    }
                    else echo "<td> nem szerkezthető </td>";

                    if(derekszogu($oldalak[$i][0], $oldalak[$i][1], $oldalak[$i][2]))
                    {
                    echo "<td>derékszögű</td>";
                    }
                    else echo "<td> nem derékszögű </td>";         
                echo "</tr>";
            }
        ?>
    </body>
</html>