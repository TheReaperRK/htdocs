<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $data = $_SESSION['data'];
    $opcio = $_SESSION['opcio'];
    $opcions = $_SESSION['opcions'];
    $opcionsD = $_SESSION['opcionsD'];

    $opcionsText = [
        'opcio1' => 'Sí',
        'opcio2' => 'No',
        'opcio3' => 'Només si em paguen bé',
        'opcio4' => 'Fes-ho tú'
    ];

    $opcionsArmesText = [
        'opcio1' => 'Llança',
        'opcio2' => 'Espasa',
        'opcio3' => 'El bastó del Caga Tió',
        'opcio4' => 'Calçot',
        'opcio5' => 'Arc'
    ];

    $opcionsDText = [
        'opcio1' => 'Agafar una catapulta',
        'opcio2' => 'Truco a Daniel Esteve',
        'opcio3' => 'Amb un petó',
        'opcio4' => 'Lluitant amb el drac'
    ];

} else {
    header('Location: formulari.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estil.css">
    <title>Final</title>
</head>
<header>
        <table id="logout">
            <td>
                <?php
                    if (isset($_SESSION['name'])) {
                        echo "<p2>Benvingut, " . $_SESSION['name'] . "</p2>";
                    }
                ?>
                <form method="POST" action="funcions.php">
                    <input class="logOut" type="submit" name="tancar_sessio" value="Tancar Sessió">
                </form>
            </td>
        </table>
</header>
<body>
    <table id="formulari">
        <td>
            <h2 class="titulo">Detalles del Formulario</h2><br>
            <p2>Email: <?= ($email) ?></p2><br>
            <p2>Data: <?= ($data) ?></p2><br>
            <p2>Coratge: <?= $opcionsText[$opcio] ?? ''; ?></p2><br>
            <p2>Armes seleccionadas:</p2><br>
            
            <?php foreach ($opcions as $opcion) {
                echo '<p2>' .$opcionsArmesText[$opcion]. '</p2>';
            } ?>
            
            <br><p2>Mètode per salvar la princesa: <?= $opcionsDText[$opcionsD] ?? ''; ?></p2><br>
        </td>
    </table>
</body>
</html>