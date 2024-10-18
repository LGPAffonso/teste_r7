<?php
session_start();

if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']){
    header('HTTP/1.1 404 Not Found');
    exit();
}
//     header('HTTP/1.1 404 Not Found');
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrado</title>
</head>
<body>
    Você fez login
</body>
</html>