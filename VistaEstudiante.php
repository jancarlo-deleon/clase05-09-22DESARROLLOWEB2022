<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Jan Carlo de Leon</title>
</head>
<body>
    <div class="container-fluid">
        <div class='mb-3'>
            <hr>
            <p>
                <h2 align="center">INGRESO DE DATOS DEL ESTUDIANTE</h2>
                <h5 align="center">A continuación, ingrese sus datos:</h2>
            </p>
            <hr>
            <form action="EstudianteController.php" method="post">
                <p>
                    <label for="apellidos" class="form-label">Apellidos:</label > 
                    <input type="text" name="apellidos" class="form-control">
                </p>
                
                <p>
                    <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
                </p>
                
                <p>
                    <label for="direccion" class="form-label">Direccion:</label>
                    <input type="text" name="direccion" class="form-control">
                </p>
                
                <p>
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control">
                </p>
                
                <p align="center">
                    <input type="submit" value="Guardar Registro"  class="btn btn-dark" >
                </p>
            </form>
        </div>
    </div>
    
    <div align="center">
        <div class="container-fluid" >

        <hr>
        <h3 align="center">LISTADO DE ESTUDIANTES</h3>
        <hr>
        <table border="1" class="table table-striped w-50 p-3"">
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th colspan="2">OPERACIONES</th>
        <?php
            include_once "EstudianteModel.php";
            $Estudiante = new Estudiante();
            $ListaEstudiantes = $Estudiante->ListarEstudiantes();
            while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
            {?>
            <tr>
                    <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                    <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                    <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                    <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                    <td style="text-align: center;">
                    <a href="VistaEditarEstudiante.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>"><img alt="Editar" src="IconoEditar.png">
                    </td>
                    <td style="text-align: center;">
                    <a href="eliminarEstudiante.html"><img alt="Eliminar" src="IconoEliminar.png">
                    </td>
            </tr>
            
        <?php } ?>

        </table>
        </div>
    </div>
   
    
</body>
</html>