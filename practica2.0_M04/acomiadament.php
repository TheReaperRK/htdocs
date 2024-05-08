<?php
include "funcions.php";

if (isset($_SESSION['nombreAux'])) {
    $name = $_SESSION['nombreAux']; //ho guardo a una variable per que no es perdi en tancar la sessió
    tancarSessio();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Acomiadament</title>
    <link rel="stylesheet" type="text/css" href="estil.css">
</head>
<body>
    <table id="formulariLogin">
        <td>
            <h2 class="titulo">Fins a un altre <?php echo  $name; ?></h2>
            <form action="inici.php">
                <input class="button_primary" type="submit" name="inici" value="Tornar a l'inici">
            </form>
        </td>
    </table>
</body>
</html>

<?php
