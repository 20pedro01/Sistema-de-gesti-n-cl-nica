<?php
session_start();
include_once 'Db.php';

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $MySQLiconn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['usuario'] = $row['usuario'];
            header("Location: index.php"); 
            exit();
        }
    }
    
    header("Location: login.php?error=1");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
