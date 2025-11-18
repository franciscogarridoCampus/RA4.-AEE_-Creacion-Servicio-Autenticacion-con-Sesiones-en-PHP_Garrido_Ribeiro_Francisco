<?php
session_start();

// Obtenemos el usuario desde la sesión

//Comprueba si esta llamada esta siendo realizada: bienvenida.php?cerrarsesion=1 si es asi se destruye la sesion y nos lleva de vuelta a index.php 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['cerrarsesion'])) {

    session_destroy();
     header("Location: index.php"); 

}

//Si intentamos entrar de nuevo a bienvenida sin crear una session nos llevara directamente a noAcceso.php, pero si la sesion existe nos quedariamos en bienvenida.php
if (!isset ($_SESSION['usuario'])){
    header("Location: noAcceso.php"); 
}else{
    $usuarioActual = $_SESSION['usuario']; //Almacenamos el nombre de usuario para mostarlo en pantalla
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h2{
            font-weight: bold;
            color: #333;
        }
        .hora{
            font-weight: bold;
            color: #390ab9ff;
        }
    </style>
</head>
<body class="bg-light d-flex flex-column align-items-center justify-content-center vh-100">

    <div class="border rounded p-4 bg-white shadow-sm text-center" style="width: 400px;">
        <h2>Bienvenido, <?php echo $usuarioActual; ?>!</h2> <!--Muestra el nombre de usuario con el cual nos logeamos-->
        <p class="hora">Hora actual: <?php echo date("H:i:s"); ?></p> <!--muestra la hora,minuto y segundo actual cuando entramos-->
        <p>Bienvenido a la página<p>

        <a href="bienvenida.php?cerrarsesion=1" class="btn btn-danger mt-3">Cerrar sesión</a><!--Al pusarlo nos llevara a otra seccion del mismo bienvenida llamado cerrarsesion y destruye la sesion para vovler a index.php-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>