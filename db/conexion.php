<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "parcialf";

//crear conexion

$conexion = new mysqli($servername, $username, $password, $database);
if($conexion->connect_error){
    die("Connection fallida: " . $conn->connect_error);
}
?>