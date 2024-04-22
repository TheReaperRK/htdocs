<?php
session_start();
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
            <p2>Benvingut, <?php echo $_SESSION['name']; ?></p2>
            <form method="POST" action="inici.php">
            <input class="logOut" type="submit" name="tancar_sessio" value="Tancar Sessió">
            </form>
        </td>
    </table>
</header>

    <table id="formulari">
        <td>

            <h2 class="titulo">¡La princesa està en perill!</h2>
            <form action="formulari.php" method="POST">

            Introdueix el correu: <input type="text" name="email" class="inputsForm"><br>

            Data: <input type="date" name="data" class="inputsForm"><br>

            <p>Tens el coratge suficient per salvar-la?</p>

            <input class="opcionR" type="radio" name="opcio" value="opcio1"> Si<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio2"> No<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio3"> Només si em paguen bé<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio3"> Fes-ho tú<br>

            <p>De quines armes disposes?</p>

            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio1"> Llança<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio2"> Espasa<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio3"> El bastó del Caga Tió<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio4"> Calçot<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio5"> Arc<br><br>

            <p>Com vols salvar a la princesa?</p>

            <select class="inputsForm" name="opcionsD[]" multiple>
                <option value="opcio1">Agafar una catapulta</option>
                <option value="opcio2">Truco a Daniel Esteve</option>
                <option value="opcio3">Amb un petó</option>
                <option value="opcio4">Lluitant amb el drac</option>
            </select><br><br>

            <input class="button_primary" type="submit" value="Enviar">
        </td>
    </table>
</form>

</body>
</html>