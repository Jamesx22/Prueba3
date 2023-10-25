<?php
$id = $_GET['id'];

$cnx = mysqli_connect('localhost','root','','pruebaregistro',33065);
$sql = "DELETE from personas WHERE 'id' like $id";
$rta = mysqli_query($cnx,$sql);

if (!$rta){
    echo "No se ha actualizado el registro";
} else {
    header("Location: index.php");
}
?>