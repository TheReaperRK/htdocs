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
            <input class="logOut" type="submit" name="tancar_sessio" value="Cerrar Sesión">
            </form>
        </td>
    </table>
</header>

    <table id="formulari">
        <td>

            <h2 class="titulo">¡Bienvenido a la solucitud de camisetas!</h2>
            <form action="formulari.php" method="POST">

            Introdueix el correu: <input type="text" name="email" class="inputsForm"><br>

            Fecha: <input type="date" name="data" class="inputsForm"><br>

            <p>Seleciona una equipación:</p>

            <input class="opcionR" type="radio" name="opcio" value="opcio1"> Primera equipación<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio2"> Segunda equipación<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio3"> Tercera equipación<br>

            <p>Equipo de fútbol:</p>

            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio1"> Barça<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio2"> Madrid<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio3"> Atletico de Madrid<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio4"> Valencia CF<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio5"> Granada FC<br><br>

            <p>Com vols salvar a la princesa?</p>

            <select class="inputsForm" name="opcionsD[]" multiple>
                <option value="opcio1">Amb corda</option>
                <option value="opcio2">Amb una conversació</option>
                <option value="opcio3">Amb uns llençols</option>
                <option value="opcio4">Lluitant amb el drac</option>
            </select><br><br>

            <input class="button_primary" type="submit" value="Enviar">
        </td>
    </table>
</form>

</body>
</html>
