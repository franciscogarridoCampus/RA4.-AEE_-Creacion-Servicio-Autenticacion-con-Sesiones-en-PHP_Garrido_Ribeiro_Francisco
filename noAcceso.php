<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No acceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        p{
            font-weight: bold;
            color: #333;
        }
        
    </style>
</head>
<body class="bg-light d-flex flex-column align-items-center justify-content-center vh-100">

    <div class="border rounded p-4 bg-white shadow-sm text-center" style="width: 400px;">
       
        <p>No tienes acceso, vuelve a intentarlo</p>
        <a href="index.php" class="btn btn-danger mt-3">Volver a iniciar sesion</a><!--Boton que te devuelve al login-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>