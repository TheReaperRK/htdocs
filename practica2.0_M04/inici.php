<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="estil.css">
        <title>index</title>
    </head>
    <body>
        <table id="formulariLogin">
            <td>
                <h2 class="titulo">Inici de sessió</h2>
                    <?php
                    // Muestra el mensaje de error si existe
                    if (isset($_SESSION['error_message'])) {
                        echo "<p class='error'>".$_SESSION['error_message']."</p>";
                         // Limpia el mensaje de error después de mostrarlo
                        unset($_SESSION["error_message"]);
                    //} else {
                       // echo "<p style='color: #bedafc;'>ㅤ</p>";
                    }
                    ?>
                <form action="comprovacio.php" method="POST">
                <input type="text" name="name" placeholder="Escriu el teu nom" class="inputs"><br>
                <input type="password" name="psswd" placeholder="Introdueix contrasenya" class="inputs"><br><br>
                <button type="submit" class="button_primary">Iniciar sessió</button>
            </form></td>
        </table>
        <div>

        </div>
    </body>
</html>