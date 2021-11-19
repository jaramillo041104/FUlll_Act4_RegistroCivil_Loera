<?php
include("conexion.php");
$con=conectar();

$idEmpleado=$_POST['idEmpleado'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];


$sql="INSERT INTO tb_empleado VALUES('$idEmpleado','$Nombres','$Apellidos','$Correo','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>