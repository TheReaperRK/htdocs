<?php
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['psswd'] = $_POST['psswd'];

if ($_SESSION['name'] === 'carlos' && $_SESSION['psswd'] === '12345') {
    // redirigir a la pagina buena

    header("Location: mercat.php");
    exit();
} else {
    // Si no son correctos defines al variable error
    $_SESSION['error_message'] = "Usuari o contrasenya incorrectes. Si us plau, intenta-ho de nou.";
    // vuelves al formulario
    header("Location: inici.php");
    exit();
}


?>