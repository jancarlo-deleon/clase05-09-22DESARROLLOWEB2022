<?php
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['apellidos'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono']);
    header('Location: vistaEstudiante.php');
}
/*EDITAR*/
else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['txtdireccion'],$_POST['txttelefono']); 
 header('Location: vistaEstudiante.php');
        
}


