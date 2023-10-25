<!DOCTYPE html>
<html>
<head>
<title>Prueba</title>
</head>
<body>
    <h1>Prueba</h1>
    <div>
        <form>
            <input type="text" name="buscar">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>
    <div>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Opciones</td>
            </tr>
            <?php
                $cnx = mysqli_connect('localhost','root','','pruebaregistro',33065);
                $sql = "SELECT * FROM personas order by id_persona";
                $rta = mysqli_query($cnx,$sql);
                while ($mostrar = mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0']?></td>
                    <td><?php echo $mostrar['1']?></td>
                    <td><?php echo $mostrar['2']?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?> &
                        nombre=<?php echo $mostrar['1'] ?> &
                        apellido=<?php echo $mostrar['2'] ?>
                        ">Editar</a>
                        <a href="elimiar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </div>

</body>
</html>