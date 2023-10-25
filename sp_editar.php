<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$cnx = mysqli_connect('localhost','root','','pruebaregistro',33065);
$sql = "UPDATE personas SET nombre='$nombre', apellido='$apellido' WHERE 'id'= $id";
$rta = mysqli_query($cnx,$sql);

if (!$rta){
    echo "No se ha actualizado el registro";
} else {
    header("Location: index.php");
}
?>