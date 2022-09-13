<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>VistaEliminarEstudiante</title>
</head>
<body>

    <form action="EstudianteController.php" method="POST">
                <?php
                    include_once "EstudianteModel.php";
                    $nuevoEstudiante = new Estudiante();
                    /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                    $resultado = $nuevoEstudiante->FiltrarEstudiante($_GET['idEst']);
                    $resultadoFiltrado = mysqli_fetch_assoc($resultado);
                ?>

        <h2 align="center">ELIMNACIÓN DE DATOS</h2>
        <h5 align="center"> ¿Desea eliminar el dato?</h5>


        <p>
            <input type="hidden" name="idStudiante" 
            value="<?php echo $resultadoFiltrado['idEstudiante']?>">
        </p>  
        <p align="center">
            <input type="submit" value="Eliminar Estudiante" name="btnEliminar"  class="btn btn-dark" >  
        </p>

        <p align="center">
            <a href="VistaEstudiante.php"><img alt="Regresar a VistaEstudiante" src="IconoCancelarEliminacionDato.png">
        </p>
        
         


    </form>
    
</body>
</html>