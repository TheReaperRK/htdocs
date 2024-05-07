<?php
function descompte($compra) {
    if ($compra < "100") {
        return $compra;
    } else if ($compra < "500") {
        return $compra*0.9;
    } else {
        return $compra*0.85;
    }
}

$compra = "700";
echo "<h1> preu: ".descompte($compra)."</h1>";
?>

