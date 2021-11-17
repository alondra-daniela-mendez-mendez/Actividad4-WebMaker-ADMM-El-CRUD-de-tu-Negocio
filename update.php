<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['ape'];
$email=$_POST['correo'];
$fecha_nac=$_POST['fecha_nac'];
$especializacion=$_POST['esp'];

$sql="UPDATE empleados SET  nombre='$nombre',apellidos='$apellidos',email='$email',fecha_nac='$fecha_nac',especializacion='$especializacion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>