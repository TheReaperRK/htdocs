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
    <p2>¡Bienvenido!, <?php echo $_SESSION['name']; ?></p2>
    <form method="POST" action="inici.php">
        <input class="logOut" type="submit" name="tancar_sessio" value="Cerrar Sesión">
    </form>
</header>

    <table id="formulari">
        <td>

            <h1>¡Bienvenido a la solucitud de camisetas!</h1>
            <form action="formulari.php" method="POST">

            Correo electrónico: <input type="text" name="email"><br>

            Fecha: <input type="date" name="data"><br>

            <p>Seleciona una equipación:</p>

            <input class="opcionR" type="radio" name="opcio" value="opcio1"> Primera equipación<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio2"> Segunda equipación<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio3"> Tercera equipación<br>

            <p>Equipo de fútbol:</p>

            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio1"> Barça<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio2"> Madrid<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio3"> Atletico de Madrid<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio4"> Valencia CF<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio5"> Granada FC<br>
            <input class="button_primary" type="submit" value="Enviar">
        </td>
    </table>
</form>

</body>
</html>
