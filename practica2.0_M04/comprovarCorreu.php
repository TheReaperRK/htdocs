<?php
session_start();

// Función para validar el correo electrónico
$email = $_POST["email"];
if (isset($_POST['tancar_sessio'])) {
    tancarSessio();
}

procesarFormulario($email);
function procesarFormulario($email) {

    $_SESSION['email'] = $_POST['email'] ?? '';
    $_SESSION['data'] = $_POST['data'] ?? '';
    $_SESSION['opcio'] = $_POST['opcio'] ?? '';
    $_SESSION['opcions'] = $_POST['opcions'] ?? [];
    $_SESSION['opcionsD'] = $_POST['opcionsD'] ?? null;

    if (!verificarCorreu($email)) {
        $_SESSION['error_message'] = "L'adreça no és correcte";
        header("Location: formulari.php");
        exit();
    } else {
        header("Location: final.php");
        exit();
    }
}

function verificarCorreu($email) {
    return substr_count($email, "@") === 1 && substr_count($email, ".") === 1;
}

function tancarSessio() {
    session_start();
    header("Location: acomiadament.php");
    $_SESSION['nombreAux'] = $_SESSION['name'];
    exit();
}

?>
