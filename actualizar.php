<?php
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM alumno WHERE cod_estudiante='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="updete.php" method="POST">
            <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']?>">

            <input type="text" class="form-control mb-3" name="dni"  value="<?php echo $row['dni']?>">
            <input type="text" class="form-control mb-3" name="nombres" value="<?php echo $row['nombres']?>">
            <input type="text" class="form-control mb-3" name="apellidos" value="<?php echo $row['apellidos']?>">

            <input type="submit" class="btn btn-primary" value="Actualizar">
        </form>
    </div>
</body>
</html>