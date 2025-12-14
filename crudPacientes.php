<?php
include_once 'Db.php';

/* --- INSERTAR PACIENTE --- */
if (isset($_POST['guardar'])) {
    $nombres = $MySQLiconn->real_escape_string($_POST['nombres']);
    $apellidos = $MySQLiconn->real_escape_string($_POST['apellidos']);
    $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);
    $observaciones = $MySQLiconn->real_escape_string($_POST['observaciones']);

    $SQL = $MySQLiconn->query("INSERT INTO pacientes(nombres, apellidos, telefono, observaciones) VALUES('$nombres','$apellidos','$telefono','$observaciones')");      

    if (!$SQL) {
        echo $MySQLiconn->error;
    }
    header("Location:pacientes.php");
}

/* --- ELIMINAR PACIENTE --- */
if (isset($_GET['eliminar'])) {
    $SQL = $MySQLiconn->query("DELETE FROM pacientes WHERE id=" . $_GET['eliminar']);
    header("Location:pacientes.php");
}

/* --- EDITAR PACIENTE --- */
if (isset($_GET['editar'])) {
    $registroaeditar = $_GET['editar'];
    $SQL = $MySQLiconn->query("SELECT * FROM pacientes WHERE id=" . $registroaeditar);
    $getROW = $SQL->fetch_array();
}

/* --- ACTUALIZAR PACIENTE --- */
if (isset($_POST['actualizar'])) {
    $id = $_GET['editar'];
    $nombres = $MySQLiconn->real_escape_string($_POST['nombres']);
    $apellidos = $MySQLiconn->real_escape_string($_POST['apellidos']);
    $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);
    $observaciones = $MySQLiconn->real_escape_string($_POST['observaciones']);

    $SQL = $MySQLiconn->query("UPDATE pacientes SET 
        nombres='$nombres', 
        apellidos='$apellidos', 
        telefono='$telefono',
        observaciones='$observaciones'
        WHERE id=$id");

    header("Location:pacientes.php");
}
?>