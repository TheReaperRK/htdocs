<?php
function crearTaula($n,$m){
    echo "<table>";
    for($i= 1; $i <= $n ; $i++){
        echo "<tr>";
        for($j= 1; $j <= $m; $j++){
            echo "<td>".$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        crearTaula(5,5);
        ?>
    </body>
</html>