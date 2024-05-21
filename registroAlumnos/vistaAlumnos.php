    
<?php 
    include("../login/conexionBD.php");
    $consulta=conectar();

    $sql="SELECT * FROM registro_alumnos";
    $query=mysqli_query($consulta,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
  
        <title> Registro Alumnos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vistaAlumnos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </head>

    <body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
        <img src="images/logo.png" height="50px">
        <img src="images/logo2.JPG" height="55px" style="border-radius: 70%;">
       
        </a>
        <ul>
            <li><a class="active" href="../Menu/menu.html">Inicio</a></li>
            <li><a href="../Nosotros/nosotros.html">Nosotros</a></li>
            <li><a href="../registroAlumnos/vistaAlumnos.php">Registro Alumnos</a></li>
            <li><a href="../registroDocentes/vistaDocentes.php">Registro Docentes</a></li>
            <li><a href="../Notas/vistaNotas.php">Promedio Alumnos</a></li>
           
        </ul>
    </nav>
  

    <div class="container mt-5">
                    <div class="row"> 

                      
                        <div class="col-md-3">
                            <h3>Registrar Información Alumno</h3>
                                <form action="validar_registro_alumnos.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Estudiante">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos Estudiante">
                                  <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo Matricula">
                                    <input type="text" class="form-control mb-3" name="grupo" placeholder="Numero de Grupo">
                                    <input type="text" class="form-control mb-3" name="nota1" placeholder="Ingrese Nota1">
                                    <input type="text" class="form-control mb-3" name="nota2" placeholder="Ingrese Nota 2">
                                    <input type="text" class="form-control mb-3" name="nota3" placeholder="Ingrese Nota 3">
                                    
                                    <input type="submit" value="Registrar Alumno" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Codigo</th>
                                        <th>Grupo Est.</th>
                                        <th>Nota1</th>
                                        <th>Nota2</th>
                                        <th>Nota3</th>
                                      
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['grupo']?></th>    
                                                <th><?php  echo $row['nota1']?></th> 
                                                <th><?php  echo $row['nota2']?></th> 
                                                <th><?php  echo $row['nota3']?></th> 
                                              
                                                <th><a href="vista_actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar_alumno.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>  
                                                <?php 
                                            }  
                                        ?>                                      
                                            </tr>
                                            
                                       
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

         
    </body>
</html>