<?php
require 'config.php';

$login = $_POST['login'];
$password = $_POST['password'];


$logueo = "SELECT * FROM dealer WHERE usuario = '{$login}'";

if ($result = $mysqli->query($logueo)) {
    if(mysqli_num_rows($result) <= 0){
        echo "no hay coincidencia de usuario";
    } else {
        $row = mysqli_fetch_array($result);
        if($row['password'] == $password)
        {
            header("Status: 301 Moved Permanently");
            header("Location: http://localhost/Venado/slicedealer.php");
            exit;
        }
        else {
            echo "Password inválido";
        }
    }
} else {
    echo "error en la consulta";
}




?>

<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DONE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="row" style="text-align:center">
            <a href="logindealer.php" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
</body>
</html>