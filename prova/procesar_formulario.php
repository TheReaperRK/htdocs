<?php
// Función para verificar si el correo electrónico es válido
function validarCorreo($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar el correo electrónico
    if(isset($_POST['correo']) && validarCorreo($_POST['correo'])) {
        $correo = $_POST['correo'];
        
        // Si el correo es válido, procesar la opción seleccionada
        if(isset($_POST['opcion'])) {
            $opcion_elegida = $_POST['opcion'];
            echo "Has elegido la opción: " . $opcion_elegida . "<br>";
        } else {
            echo "Por favor, selecciona una opción.<br>";
        }
        
        echo "Correo electrónico válido: " . $correo;
    } else {
        // Si el correo no es válido, redirigir al formulario manteniendo las opciones seleccionadas
        header("Location: formulario.php");
        exit();
    }
}
?>
