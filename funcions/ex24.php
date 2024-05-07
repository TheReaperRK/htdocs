<?php
function sumaEnters($x, $y){
    return $x + $y;
}

function restaEnters($x, $y){
    return $x - $y;
}
function divisioEnters($x, $y){
    $resultat="";

    if(restaEnters($x,$y) != 0){
    $resultat= "resultat: ".sumaEnters($x,$y)/restaEnters($x,$y);
    }else {
    $resultat= "No hem pogut resoldre la divisió";
    }
    return $resultat;
}

echo "<h1>".divisioEnters(2,1)."</h1>"
?>