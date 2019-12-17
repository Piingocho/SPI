<?php 
$hostname = "localhost";
$usuario = "root";
$password = "";
$basededatos = "venado";
$mysqli = new mysqli($hostname, $usuario, $password, $basededatos);
$mysqli->set_charset("utf8");

if($mysqli->connect_error){
    die('Error en la conexion' . $mysqli->connect_error);
}
else
{

}
?>