<?php
session_start();
include "variablesBBDD.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulari</title>
    <link rel="stylesheet" type="text/css" href="estil.css">
</head>
<body>

<header>
    <table id="logout">
        <td>
            <p2>Benvingut al mercat</p2>
            <form method="POST" action="funcions.php">
            <input class="logOut" type="submit" name="tancar_sessio" value="Tancar Sessió">
            </form>
        </td>
    </table>
    <table id="mercat">
        <tr>
            <td>
                <h2 class="titulo"> Tria els teus productes <?php echo  $_SESSION['name']; ?></h2>
            </td>
        </tr>

            <?php
                for ($i=0; $i < $items; $i++) {

                    //consulta per obtenir el nom
                    $sql = "SELECT nom FROM productes where id = $i+1";
                    $result = $conn->query($sql);
                    // Obtenir el resultat
                    $row = $result->fetch_assoc();
                    $nom = $row['nom'];

                    //consulta per obtenir el preu
                    $sql = "SELECT preu FROM productes where id = $i+1";
                    $result = $conn->query($sql);
                    // Obtenir el resultat
                    $row = $result->fetch_assoc();
                    $preu = $row['preu'];

                    //consulta per obtenir el preu
                    $sql = "SELECT imatge FROM productes where id = $i+1";
                    $result = $conn->query($sql);
                    // Obtenir el resultat
                    $row = $result->fetch_assoc();
                    $imtg = $row['imatge'];

                    echo "<tr>
                            <td>";
                    
                    echo "<table class='item'>
                            <tr>
                                <td>
                                    <div class ='grid-layout'>
                                        <div class ='box1'>
                                            <img class='tenda' src='$imtg' alt='img'>
                                        </div>
                                        <div class='box2'>
                                            <h2>$nom</h2><h2>$preu</h2>
                                        </div>
                                        <div class='box3'>
                                            <form action='cistella.php'>
                                                <input id='num' type='number' name='cant' value='cantidad'>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <br>
                <form action="cistella.php">
                    <input id="comprar" type="submit" name="inici" value="Comprar">
                </form>
            </td>
        </tr>
    </table>
</header>