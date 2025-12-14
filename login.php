<!DOCTYPE html>
<html lang="es">
<head>
  <title>Iniciar Sesión - Centro Clínico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
      body { background-color: #f2f2f2; }
      .login-form { width: 340px; margin: 50px auto; }
      .login-form form { margin-bottom: 15px; background: #fff; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); padding: 30px; }
      .login-form h2 { margin: 0 0 15px; }
      .form-control, .btn { min-height: 38px; border-radius: 2px; }
      .btn { font-size: 15px; font-weight: bold; }
  </style>
</head>
<body>
<div class="login-form">
    <form action="login_action.php" method="post">
        <h2 class="text-center">Iniciar Sesión</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        </div>
        <?php
        if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger text-center">Usuario o contraseña incorrectos</div>';
        }
        ?>
    </form>
    <p class="text-center"><a href="index.php">Volver al Inicio</a></p>
</div>
</body>
</html>
