<?php 
    include("../login/conexionBD.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro_docentes WHERE cedula='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar Docentes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizar_docente.php" method="POST">
                        <h1> Actualización De Datos De Docente</h1>
                    <br>
                      
                                <input type="hidden" name="cedula" value="<?php echo $row['cedula']  ?>">
                                <label>Actualizar Nombre: </label>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <label>Actualizar Apellido: </label>
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido" value="<?php echo $row['apellido']  ?>">
                                <label>Actualizar Pre-Grado: </label>
                                <input type="text" class="form-control mb-3" name="titulo1" placeholder="titulo1" value="<?php echo $row['titulo1']  ?>">
                                <label>Actualizar Pos-Grado: </label>
                                <input type="text" class="form-control mb-3" name="titulo2" placeholder="titulo2" value="<?php echo $row['titulo2']  ?>">
                                <label>Actualizar Materia: </label>
                                <input type="text" class="form-control mb-3" name="materia" placeholder="materia" value="<?php echo $row['materia']  ?>">
                                <label>Actualizar Horario Materia: </label>
                                <input type="text" class="form-control mb-3" name="horario" placeholder="horario" value="<?php echo $row['horario']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar Docente">
                    </form>
                    
                </div>
    </body>
</html>