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


    $producto = [
        "id"        => $_GET['id'],
        "Nombre"    => $_POST['Nombre'],
        "Descripcion"  => $_POST['Descripcion'],
        "Precio"     => $_POST['Precio'],
        "Localizacion"      => $_POST['Localizacion']
    ];
    $SQL = "UPDATE carrito SET
        Nombre = :Nombre,
        Descripcion = :Descripcion,
        Precio = :Precio,
        Localizacion = :Localizacion,
        updated_at = NOW()
        WHERE id = :id";
    $consulta = mysqli_query($con, $sql);

    if (!$consulta) {
        die("No se ha podido realizar el insert");
    } else {
        //echo "El insert se ha realizado correctamente";
?>
        <?php
        if (isset($producto) && $producto) {
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mt-4">Editando el producto <?= ($producto['Nombre'])  ?></h2>
                        <hr>
                        <form method="post">
                            <div class="form-group">
                                <label for="Nombre">Nombre</label>
                                <input type="text" name="Nombre" id="Nombre" value="<?= ($producto['Nombre']) ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Descripcion">Descripcion</label>
                                <input type="text" name="Descripcion" id="Descripcion" value="<?= ($producto['Descripcion']) ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Precio">Precio</label>
                                <input type="Precio" name="Precio" id="Precio" value="<?= ($producto['Precio']) ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Localizacion">Localizacion</label>
                                <input type="text" name="Localizacion" id="Localizacion" value="<?= ($producto['Localizacion']) ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
                                <a class="btn btn-primary" href="Formulario frutas.php">Regresar al inicio</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php
        }
    }
}
?>