<!DOCTYPE html>
<html>
<head>
    <title>Formulario con PHP</title>
</head>
<body>

<h2>Elige una opción:</h2>

<form action="procesar_formulario.php" method="post">
    <input type="radio" name="opcion" value="opcion1" <?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcion1') echo 'checked'; ?>> Opción 1<br>
    <input type="radio" name="opcion" value="opcion2" <?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcion2') echo 'checked'; ?>> Opción 2<br>
    <input type="radio" name="opcion" value="opcion3" <?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcion3') echo 'checked'; ?>> Opción 3<br>
    <input type="radio" name="opcion" value="opcion4" <?php if(isset($_POST['opcion']) && $_POST['opcion'] == 'opcion4') echo 'checked'; ?>> Opción 4<br><br>
    
    <label for="correo">Correo electrónico:</label><br>
    <input type="email" id="correo" name="correo"><br><br>
    
    <input type="submit" value="Enviar">
</form>

</body>
</html>
