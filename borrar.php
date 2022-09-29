<?php

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

    $id = $_GET['id'];
    $sql = "DELETE FROM carrito WHERE id =" . $id;

    $consulta = mysqli_query($con, $sql);

    if (!$consulta) {
        die("No se ha podido realizar el insert");
    } else {
        //echo "El insert se ha realizado correctamente";


?>
        <a class="btn btn-primary" href="Formulario frutas.html">Regresar al inicio</a>
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $resultado['mensaje'] ?>

                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
?>