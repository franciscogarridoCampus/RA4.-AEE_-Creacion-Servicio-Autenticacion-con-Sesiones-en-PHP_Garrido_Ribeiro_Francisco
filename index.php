
<?php
$usuario = ["francisco" => "1234", "carlos" =>"123", "pablo" =>"123"];

session_start();
//Esto es para ver si el formulario le ha enviado el usuario y contraseña para poder acceder
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usuario']) && isset($_POST['password'])) {
  
  //Comprueba que el usuario que manda el formulario pertenezca al array y si pertenece comprueba que la contraseña insertada es la misma que la del usuario del array
    if (isset($usuario[strtolower($_POST['usuario'])]) && $usuario[strtolower($_POST['usuario'])] === $_POST['password']) {

      //almacena la informacion del usuario insertado para poder moverse a bienvenida.php porque si no estuviera nos llevaria a noAcceso.php
        $_SESSION['usuario'] = $_POST['usuario'];

        header("Location: bienvenida.php"); 
        exit();
    }else{
      header("Location: noAcceso.php"); 
        exit();
    }
}


?>


<!DOCTYPE html>
<html lang="es">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    h4{
      font-weight: bold;
      color: #333;
    }
    label{
      font-weight: bold;
      color: #333;
    }
  </style>
  
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <form class="border rounded p-4 bg-white shadow-sm" style="width: 320px;" action="index.php" method="post"><!--necesita el metodo post para enviarle el usuario y contraseña-->
    <h4 class="mb-3 text-center">Iniciar sesión</h4>


    <!--El  name del usuario y contraseña sirve para que el php lo vea-->
    <div class="mb-3">
      <label for="usuario" class="form-label">Nombre de usuario</label>
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password"  placeholder="Contraseña" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Entrar</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
