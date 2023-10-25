<!DOCTYPE html>
<html>
<head>
<title>Prueba</title>
</head>
<body>
    
<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
?>

    <div>
        <form action="sp_editar.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar Datos</td>
                    <td><input type="text" name="id" id='' style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" id='' value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido" id='' value="<?=$apellido?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>