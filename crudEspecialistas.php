<?php
include_once 'Db.php';

/* --- INSERTAR ESPECIALISTA --- */
if (isset($_POST['guardar'])) {
    $nombres = $MySQLiconn->real_escape_string($_POST['nombres']);
    $apellidos = $MySQLiconn->real_escape_string($_POST['apellidos']);
    $especialidad = $MySQLiconn->real_escape_string($_POST['especialidad']);
    $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);

    $SQL = $MySQLiconn->query("INSERT INTO especialistas(nombres, apellidos, especialidad, telefono) VALUES('$nombres','$apellidos','$especialidad','$telefono')");      

    if (!$SQL) {
        echo $MySQLiconn->error;
    }
    header("Location:especialistas.php");
}

/* --- ELIMINAR ESPECIALISTA --- */
if (isset($_GET['eliminar'])) {
    $SQL = $MySQLiconn->query("DELETE FROM especialistas WHERE id=" . $_GET['eliminar']);
    header("Location:especialistas.php");
}

/* --- EDITAR ESPECIALISTA --- */
if (isset($_GET['editar'])) {
    $registroaeditar = $_GET['editar'];
    $SQL = $MySQLiconn->query("SELECT * FROM especialistas WHERE id=" . $registroaeditar);
    $getROW = $SQL->fetch_array();
}

/* --- ACTUALIZAR ESPECIALISTA --- */
if (isset($_POST['actualizar'])) {
    $id = $_GET['editar'];
    $nombres = $MySQLiconn->real_escape_string($_POST['nombres']);
    $apellidos = $MySQLiconn->real_escape_string($_POST['apellidos']);
    $especialidad = $MySQLiconn->real_escape_string($_POST['especialidad']);
    $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);

    $SQL = $MySQLiconn->query("UPDATE especialistas SET 
        nombres='$nombres', 
        apellidos='$apellidos', 
        especialidad='$especialidad',
        telefono='$telefono'
        WHERE id=$id");

    header("Location:especialistas.php");
}
?>