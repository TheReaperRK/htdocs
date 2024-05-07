<?php
session_start();

// Función para validar el correo electrónico
function validarCorreo($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha ingresado un correo electrónico válido
    if(isset($_POST['email']) && validarCorreo($_POST['email'])) {
        // El correo es válido, puedes procesar los datos aquí
        // Por ejemplo, podrías almacenarlos en variables o en una base de datos

        // También puedes acceder a otros campos del formulario, como la fecha y las opciones seleccionadas
        $correo = $_POST['email'];
        $fecha = $_POST['data'];
        $opcion = $_POST['opcion'];
        $armas = $_POST['opcions']; // Array de armas seleccionadas
        $salvamento = $_POST['opcionsD']; // Array de formas de salvar a la princesa

        // Realizar otras operaciones necesarias, como almacenar en la base de datos, enviar correos electrónicos, etc.

        // Redireccionar a una página de éxito o cualquier otra página necesaria
        header("Location: final.php");
        exit();
    } else {
        // El correo electrónico no es válido, establecer un mensaje de error y redirigir de vuelta al formulario
        $_SESSION['error_message'] = "El correo electrónico no es válido.";
        header("Location: formulari.php");
        exit();
    }
}
?>
