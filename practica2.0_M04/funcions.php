<?php
session_start();


if (isset($_POST['tancar_sessio'])) {
    header("Location: acomiadament.php");
    $_SESSION['nombreAux'] = $_SESSION['name'];
    exit();
}

if (isset($_POST['email'])){
    $email = $_POST["email"];
    procesarFormulario($email);
}
function procesarFormulario($email) { //dono els valors del post a les diferents opcions

    $_SESSION['email'] = $_POST['email'] ?? '';
    $_SESSION['data'] = $_POST['data'] ?? '';
    $_SESSION['opcio'] = $_POST['opcio'] ?? '';
    $_SESSION['opcions'] = $_POST['opcions'] ?? [];
    $_SESSION['opcionsD'] = $_POST['opcionsD'] ?? null;

    if (!verificarCorreu($email)) { //metode per redirigir en funcio de si es correcte o no
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
    session_unset();
    session_destroy();
}
?>
