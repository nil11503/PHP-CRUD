<?php

//session_start();



$fruta = $_GET['fruta'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$localizacion = $_GET['localizacion'];

//$_SESSION["nick_logueado"]=$nombre;

//echo "El nombre es ".$nombre." la edad es ".$edad." y los apellidos son ".$apellidos;

$servidor = "localhost";
$usuario = "root";
$password = "usbw";
$bd = "fruteria";

$con = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$con) {
    die("No se ha podido realizar la conexión_" . mysqli_connect_error() . "<br>");
} else {
    mysqli_set_charset($con, "utf8");
    //echo "Se ha establecido correctamente la conexión a la base de datos";

    $sql = "INSERT INTO `carrito`(`id`, `Nombre`, `Descripcion`, `Precio`, `Localizacion`) 
    VALUES (NULL,'$fruta','$descripcion',$precio,'$localizacion')";

    $consulta = mysqli_query($con, $sql);

    if (!$consulta) {
        die("No se ha podido realizar el insert");
    } else {
        //echo "El insert se ha realizado correctamente";


?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="Formulario frutas.html" class="btn btn-primary mt-4">Crear alumno</a>
                        <hr>
                        <form method="post" class="form-inline">
                            <div class="form-group mr-3">
                                <input type="text" id="Nombre" name="Nombre" placeholder="Buscar por Nombre" class="form-control">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
                        </form>
                    </div>
                </div>
            </div>
            <table>
                <?php
                if (isset($_POST['Nombre'])) {
                    $sql2 = "SELECT * FROM carrito WHERE Nombre LIKE '%" . $_POST['Nombre'] . "%'";
                } else {
                    $sql2 = "SELECT * FROM alumnos";
                }
                $consulta = mysqli_query($con, $sql2);
                echo "<td>" . "ID" . "</td>";
                echo "<td>" . "Nombre" . "</td>";
                echo "<td>" . "Descripcion" . "</td>";
                echo "<td>" . "Precio" . "</td>";
                echo "<td>" . "Localizacion" . "</td>";
                echo "<td>" . "Acciones" . "</td>";

                while ($fila = $consulta->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["id"] . "</td>";
                    echo "<td>" . $fila["Nombre"] . "</td>";
                    echo "<td>" . $fila["Descripcion"] . "</td>";
                    echo "<td>" . $fila["Precio"] . "</td>";
                    echo "<td>" . $fila["Localizacion"] . "</td>";
                ?><td>
                        <a href="<?= 'borrar.php?id=' . ($fila["id"]) ?>">🗑️Borrar</a>
                        <a href="<?= 'editar.php?id=' . ($fila["id"]) ?>">✏️Editar</a>
                    </td><?php
                            echo "</tr>";
                        }
                            ?>
            </table>
        </body>

        </html>

<?php
    }
}
?>