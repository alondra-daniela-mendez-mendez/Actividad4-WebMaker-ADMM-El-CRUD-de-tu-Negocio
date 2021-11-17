<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['ape'];
$email=$_POST['correo'];
$fecha_nac=$_POST['fecha_nac'];
$especializacion=$_POST['esp'];


$sql="INSERT INTO empleados VALUES('','$nombre','$apellidos','$email','$fecha_nac','$especializacion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>