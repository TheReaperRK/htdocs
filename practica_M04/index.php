<?php
session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica el usuario y la contraseña
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    // checking de usuarioos
    if ($usuario === 'carlos' && $contrasena === '12345') {
        // redirigir a la pagina buena
        header("Location: formulari.php");
        exit();
    } else {
        // Si no son correctos defines al variable error
        $_SESSION['error_message'] = "Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";
        // vuelves al formulario
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estil.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <table>
        <td>
            <h2 class="titulo">Inicio de sesión</h2>
            <?php
            // Muestra el mensaje de error si existe
            if (isset($_SESSION['error_message'])) {
                echo "<p style='color: #1278BF;'>".$_SESSION['error_message']."</p>";
                unset($_SESSION['error_message']); // Limpia el mensaje de error después de mostrarlo
            }
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                Usuario: <input type="text" name="usuario"><br>
                Contraseña: <input type="password" name="contrasena"><br>
                <input type="submit" value="Iniciar sesión">
            </form>
        </td>
    </table>
</body>
</html>
