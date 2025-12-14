<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Centro Psico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/style5.css">
</head>

<body>
  <div class="container text-center">
    <h1>Centro de Psicología y Psiquiatría</h1>
  </div>

  <nav class="navbar navbar-inverse" style="background-color: rgb(8, 39, 163);">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php" >Inicio</a></li>
          <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="paginas/pacientes.php">Pacientes</a></li>
            <li><a href="paginas/especialistas.php">Especialistas</a></li>
          <?php endif; ?>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['user_id'])): ?>
             <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['usuario']; ?></a></li>
             <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
          <?php else: ?>
             <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid text-center">
    <div class="jumbotron">
      <h2>Bienvenido al Sistema de Gestión Clínica Integral</h2>
      <p>Administra pacientes y especialistas de forma eficiente</p>
    </div>
    <img src="imagenes/logo" class="mx-auto d-block center-block" style="width:25%; opacity: 0.5;">
    <br><br>
  </div>

  <footer style= "background-color: rgb(8, 39, 163); color:rgb(252, 252, 252)" class="container-fluid text-center">
    <p>Centro de Psicología y Psiquiatría &copy; 2025</p>
    <form class="form-inline">Suscripción a boletín:
      <input type="email" class="form-control" size="50"
             placeholder="Tu correo electrónico">
      <button type="button" class="btn btn-primary">Suscribir</button>
    </form>
  </footer>
</body>
</html>