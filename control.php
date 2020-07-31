<?php
include("conexion.php");

$name = $_POST["name"];
$email = $_POST["email"];
$estado = $_POST["estado"];

$insertar = "INSERT INTO personas (name,email,estado) VALUES ('$name','$email','$estado')";
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
	echo "Error al registrarse";

}else{

	echo "\n Conecxion exitosa";
}

mysqli_close($conexion);