<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        Esto es una pagina para formulario de html con php
    </div>
    <!-- Si colocamos ?edad=23 estamos indicando que se envia dicha info por el metodo GET -->
    <form action="recibir.php?edad=23" method="POST">
        Nombre: <input type="text" name="nombreFormulario" id="idNombreFormulario">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>