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
            <form method="POST" action="acomiadament.php">
            <input class="logOut" type="submit" name="tancar_sessio" value="Tancar Sessió">
            </form>
        </td>
    </table>
</header>

    <table id="formulari">
        <td>
            
            <h2 class="titulo">¡La princesa està en perill!</h2>
            <form action="comprovarCorreu.php" method="POST">

            Introdueix el correu: <input type="text" name="email" class="inputsForm">
            
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

            Data: <input type="date" name="data" class="inputsForm" value="<?php if(isset($_POST['data'])) echo $_POST['data']; ?>"><br>

            <p>Tens el coratge suficient per salvar-la?</p>

            <input class="opcionR" type="radio" name="opcion" value="opcio1"<?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcio1') echo ' checked'; ?>> Si<br>
            <input class="opcionR" type="radio" name="opcion" value="opcio2"<?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcio2') echo ' checked'; ?>> No<br>
            <input class="opcionR" type="radio" name="opcion" value="opcio3"<?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcio3') echo ' checked'; ?>> Només si em paguen bé<br>
            <input class="opcionR" type="radio" name="opcion" value="opcio4"<?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcio4') echo ' checked'; ?>> Fes-ho tú<br>

            <p>De quines armes disposes?</p>

            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio1" <?php if(isset($_POST['opcions']) && in_array('opcio1', $_POST['opcions'])) echo 'checked'; ?>> Llança<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio2" <?php if(isset($_POST['opcions']) && in_array('opcio2', $_POST['opcions'])) echo 'checked'; ?>> Espasa<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio3" <?php if(isset($_POST['opcions']) && in_array('opcio3', $_POST['opcions'])) echo 'checked'; ?>> El bastó del Caga Tió<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio4" <?php if(isset($_POST['opcions']) && in_array('opcio4', $_POST['opcions'])) echo 'checked'; ?>> Calçot<br>
            <input class="opcionC" type="checkbox" name="opcions[]" value="opcio5" <?php if(isset($_POST['opcions']) && in_array('opcio5', $_POST['opcions'])) echo 'checked'; ?>> Arc<br><br>

            <p>Com vols salvar a la princesa?</p>

            <select class="inputsForm" name="opcionsD[]" multiple>
                <option value="opcio1" <?php if(isset($_POST['opcionsD']) && in_array('opcio1', $_POST['opcionsD'])) echo 'selected'; ?>>Agafar una catapulta</option>
                <option value="opcio2" <?php if(isset($_POST['opcionsD']) && in_array('opcio2', $_POST['opcionsD'])) echo 'selected'; ?>>Truco a Daniel Esteve</option>
                <option value="opcio3" <?php if(isset($_POST['opcionsD']) && in_array('opcio3', $_POST['opcionsD'])) echo 'selected'; ?>>Amb un petó</option>
                <option value="opcio4" <?php if(isset($_POST['opcionsD']) && in_array('opcio4', $_POST['opcionsD'])) echo 'selected'; ?>>Lluitant amb el drac</option>
            </select><br><br>

            <input class="button_primary" type="submit" value="Enviar">
        </td>
    </table>
</form>

</body>
</html>