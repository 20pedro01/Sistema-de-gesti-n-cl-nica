<?php
include_once 'Db.php';

// Crear tabla PACIENTES
$sqlPacientes = "CREATE TABLE IF NOT EXISTS pacientes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    observaciones TEXT
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;";

if ($MySQLiconn->query($sqlPacientes) === TRUE) {
    echo "Tabla 'pacientes' creada o verificada correctamente.<br>";
} else {
    echo "Error creando tabla pacientes: " . $MySQLiconn->error . "<br>";
}

// Crear tabla ESPECIALISTAS
$sqlEspecialistas = "CREATE TABLE IF NOT EXISTS especialistas (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    especialidad VARCHAR(50) NOT NULL,
    telefono VARCHAR(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;";

if ($MySQLiconn->query($sqlEspecialistas) === TRUE) {
    echo "Tabla 'especialistas' creada o verificada correctamente.<br>";
} else {
    echo "Error creando tabla especialistas: " . $MySQLiconn->error . "<br>";
}

// Crear tabla USUARIOS
$sqlUsuarios = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;";

if ($MySQLiconn->query($sqlUsuarios) === TRUE) {
    echo "Tabla 'usuarios' creada o verificada correctamente.<br>";
    
    // Insertar usuario admin por defecto si no existe
    $checkAdmin = $MySQLiconn->query("SELECT * FROM usuarios WHERE usuario='admin'");
    if ($checkAdmin->num_rows == 0) {
        $passHash = password_hash("admin123", PASSWORD_DEFAULT);
        $sqlInsertAdmin = "INSERT INTO usuarios (usuario, password) VALUES ('admin', '$passHash')";
        if ($MySQLiconn->query($sqlInsertAdmin) === TRUE) {
            echo "Usuario admin creado (User: admin, Pass: admin123).<br>";
        }
    }
} else {
    echo "Error creando tabla usuarios: " . $MySQLiconn->error . "<br>";
}

echo "<br><a href='index.php'>Ir al Inicio</a>";
?>