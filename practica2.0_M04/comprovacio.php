<?php
session_start();

$usuario = $_POST['name'];
$contrasena = $_POST['psswd'];


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
?>