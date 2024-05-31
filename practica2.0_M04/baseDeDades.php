<?php
$dbhost = "localhost";
$dbuser = "Carlos";
$dbpass = "12345";
$dbname = "mercatPracticaP3";

// Creamos la conexión
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Comprobamos la conexión
if ($conn->connect_error) {
    die("Conexión errónea: " . $conn->connect_error);
}
echo "Conexión correcta<br>";
/*
// Crear tabla productes
$sql = "CREATE TABLE productes (
    id INT(3) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    preu DECIMAL(5,2),
    imatge VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla 'productes' creada correctamente<br>";
} else {
    echo "Error creando tabla 'productes': " . $conn->error . "<br>";
}

// Crear tabla usuaris
$sql = "CREATE TABLE usuaris (
    idUsuari INT(5) AUTO_INCREMENT PRIMARY KEY,
    nomUsuari VARCHAR(20) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla 'usuaris' creada correctamente<br>";
} else {
    echo "Error creando tabla 'usuaris': " . $conn->error . "<br>";
}

// Crear tabla cistella
$sql = "CREATE TABLE cistella (
    idUsuari INT(5),
    producteId INT(3),
    producteNom VARCHAR(30),
    quantitat INT(3),
    PRIMARY KEY (idUsuari, producteId),
    FOREIGN KEY (idUsuari) REFERENCES usuaris(idUsuari)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla 'cistella' creada correctamente<br>";
} else {
    echo "Error creando tabla 'cistella': " . $conn->error . "<br>";
}

//inserts
    //rosa
    $sql = "INSERT INTO productes (nom, preu, imatge) VALUES ('Rosa', 10.50, 'imatges/rosa.jpg')";
        if ($conn->query($sql) === TRUE) {
            echo "Producte Rosa insertat correctament<br>";
        } else {
            echo "Error insertant Producte Rosa: " . $conn->error . "<br>";
        }

        $sql = "INSERT INTO productes (nom, preu, imatge) VALUES ('Espasa', 35.99, 'imatges/espasa.jpg')";
        if ($conn->query($sql) === TRUE) {
            echo "Producte Espasa insertat correctament<br>";
        } else {
            echo "Error insertant Producte Espasa: " . $conn->error . "<br>";
        }

        $sql = "INSERT INTO productes (nom, preu, imatge) VALUES ('Casc', 20.50, 'imatges/casc.jpg')";
        if ($conn->query($sql) === TRUE) {
            echo "Producte Casc insertat correctament<br>";
        } else {
            echo "Error insertant Producte Casc: " . $conn->error . "<br>";
        }

        $sql = "INSERT INTO productes (nom, preu, imatge) VALUES ('Escama de drac', 9.99, 'imatges/escama.jpg')";
        if ($conn->query($sql) === TRUE) {
            echo "Producte Escama insertat correctament<br>";
        } else {
            echo "Error insertant Producte Escama: " . $conn->error . "<br>";
        }
// Cerramos la conexión
*/
$conn->close();
?>
