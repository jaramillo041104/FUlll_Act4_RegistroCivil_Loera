<?php

include("conexion.php");
$con=conectar();

$idEmpleado=$_POST['idEmpleado'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE tb_empleado SET  Nombres='$Nombres',Apellidos='$Apellidos',Correo='$Correo',Telefono='$Telefono' WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>