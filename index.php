
<?php
$usuario=["Francisco" => "1234"];

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
$_SESSION ['usuario']=$_POST['nombre'];
}

if (isset($_GET['logout'])) {
session_destroy();
header("Location: bienvenida.php"); 
exit();
}
//USAR HEADER PARA REDIRIGIRSE A OTRO APARTADO DEL ARCHIVO PeRO ANTES HACER EL LOGIN BIEN
?>

<!--Justo este php es de prueba hasta que averigue como hacer que si es correcto usuario y contraseña me lleve a un apartado dentro de este php con el ehader redirect-->


<!DOCTYPE html>
<html lang="es">
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <form class="border rounded p-4 bg-white shadow-sm" style="width: 320px;">
    <h4 class="mb-3 text-center">Iniciar sesión</h4>

    <div class="mb-3">
      <label for="usuario" class="form-label">Nombre de usuario</label>
      <input type="text" class="form-control" id="usuario" placeholder="Usuario" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Entrar</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
