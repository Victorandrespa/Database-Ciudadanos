<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Vista Regiones</title>
</head>

<body>





    <?php

    require_once("conexion.php");
    $sql = "select * from regiones";
    $ejecutar = mysqli_query($conexion, $sql);

    ?>

    <h1>Regiones</h1>

    <table class="table table-primary w-50 ms-5">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Region</th>
                <th>Descripcion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($datos = mysqli_fetch_assoc($ejecutar)) {
                ?>
                <tr>
                    <td><?php echo $datos["cod_region"]; ?></td>
                    <td><?php echo $datos["nombre"]; ?></td>
                    <td><?php echo $datos["descripcion"]; ?></td>
                    <td>
                        <form action="crud_region.php" method="post">
                            <input type="hidden" name="hidden_codigo" id="hidden_codigo" 
                            value="<?php echo $datos["cod_region"]; ?>">
                            <button type="submit" name="btn_eliminar" id="btn_eliminar" class="p-1 btn">
                                 <i class="bi bi-trash"></i>
                            </button>
                        </form>
                       
                        <!-- <i class="bi bi-pencil-square"></i> -->
                    </td>

                </tr>

                <?php
            }
            ?>

        </tbody>
    </table>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>




</body>

</html>