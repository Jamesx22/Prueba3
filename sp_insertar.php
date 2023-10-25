<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$cnx = mysqli_connect('localhost','root','','pruebaregistro',33065);
$sql = "INSERT INTO personas(nombre, apellido) VALUES ('$nombre','$apellido')";
$rta = mysqli_query($cnx,$sql);

if (!$rta){
    echo "No se realizo el registro";
} else {
    header("Location: index.php");
}
?>