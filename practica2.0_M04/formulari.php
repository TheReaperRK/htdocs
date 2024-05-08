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
            <form method="POST" action="comprovarCorreu.php">
            <input class="logOut" type="submit" name="tancar_sessio" value="Tancar Sessió">
            </form>
        </td>
    </table>
</header>

    <table id="formulari">
        <td>
            
            <h2 class="titulo">¡La princesa està en perill!</h2>
            <form action="comprovarCorreu.php" method="POST">

            Introdueix el correu:<input type="text" name="email" class="inputsForm" value="<?= htmlspecialchars($data['email'] ?? '') ?>">
            
            <?php
                if (isset($_SESSION['error_message'])) {
                    echo "<div class='error_message'>";
                    echo '<p class="error">'. $_SESSION['error_message'] .'</p>';
                    echo "</div>";

                    unset($_SESSION["error_message"]);
                } else {
                    echo "<br>";
                }
            ?>
            </div>

            Data: <input type="date" name="data" class="inputsForm" value="<?= isset($_SESSION['data']) ? $_SESSION['data'] : '' ?>"><br>

            <p>Tens el coratge suficient per salvar-la?</p>

            <input class="opcionR" type="radio" name="opcio" value="opcio1" <?= isset($_SESSION['opcio']) && $_SESSION['opcio'] === 'opcio1' ? 'checked' : '' ?>> Si<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio2" <?= isset($_SESSION['opcio']) && $_SESSION['opcio'] === 'opcio2' ? 'checked' : '' ?>> No<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio3" <?= isset($_SESSION['opcio']) && $_SESSION['opcio'] === 'opcio3' ? 'checked' : '' ?>> Només si em paguen bé<br>
            <input class="opcionR" type="radio" name="opcio" value="opcio3" <?= isset($_SESSION['opcio']) && $_SESSION['opcio'] === 'opcio4' ? 'checked' : '' ?>> Fes-ho tú<br>

            <p>De quines armes disposes?</p>

            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio1" <?php if (isset($_SESSION['opcions']) && in_array('opcio1', $_SESSION['opcions'])) echo 'checked'; ?>> Llança<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio2" <?php if (isset($_SESSION['opcions']) && in_array('opcio2', $_SESSION['opcions'])) echo 'checked'; ?>> Espasa<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio3" <?php if (isset($_SESSION['opcions']) && in_array('opcio3', $_SESSION['opcions'])) echo 'checked'; ?>> El bastó del Caga Tió<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio4" <?php if (isset($_SESSION['opcions']) && in_array('opcio4', $_SESSION['opcions'])) echo 'checked'; ?>> Calçot<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio5" <?php if (isset($_SESSION['opcions']) && in_array('opcio5', $_SESSION['opcions'])) echo 'checked'; ?>> Arc<br><br>



            <p>Com vols salvar a la princesa?</p>

            <select class="inputsForm" name="opcionsD">
            <option value="opcio1" <?php if (isset($_SESSION['opcionsD']) && $_SESSION['opcionsD'] === 'opcio1') echo 'selected'; ?>>Agafar una catapulta</option>
            <option value="opcio2" <?php if (isset($_SESSION['opcionsD']) && $_SESSION['opcionsD'] === 'opcio2') echo 'selected'; ?>>Truco a Daniel Esteve</option>
            <option value="opcio3" <?php if (isset($_SESSION['opcionsD']) && $_SESSION['opcionsD'] === 'opcio3') echo 'selected'; ?>>Amb un petó</option>
            <option value="opcio4" <?php if (isset($_SESSION['opcionsD']) && $_SESSION['opcionsD'] === 'opcio4') echo 'selected'; ?>>Lluitant amb el drac</option>
            </select><br><br>

            <input class="button_primary" type="submit" value="Enviar">
        </td>
    </table>
</form>

</body>
</html>