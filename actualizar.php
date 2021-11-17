<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleados WHERE id='$id'";
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
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
    </head>
    <body>
        <header>
            <div class="wrapp">
                <div class="logo">
                    <a href="#"><img src="img/logo.png" alt="WebMaker"></a>
                </div>
                <h1 class=titulo>Registro de Empleados</h1>
            </div>
        </header>	
                <div class="container mt-5">
                    <form action="update.php" method="post" class="update">
                        <?php echo "<h1 align=center>Modificar datos datos de la ID: ".$id."</h1>"?>
                        <input type="hidden" name="id" placeholder="ID" value="<?php echo $row['id']  ?>">
                        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                        <input type="text" name="ape" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                        <input type="email" name="correo" placeholder="micorreo@gmail.com" value="<?php echo $row['email']  ?>">
                        <input type="date" name="fecha_nac" value="<?php echo $row['fecha_nac']  ?>">
                        <input type="text" name="esp" placeholder="Especialización" value="<?php echo $row['especializacion']  ?>">
                        <input type="submit" name="empleado" value="Actualizar" href="delete.php?id=<?php echo $id ?>">
                    </form>
                </div>
            <footer>
		        <div>
                    <p> SUBMÓDULO 2 Desarrolla aplicaciones Web con conexión a bases de datos</p>
                    <h3>Méndez Méndez Alondra Daniela 5J • No. Lista: 27  </h3>
                    <a href="https://github.com/alondra-daniela-mendez-mendez">https://github.com/alondra-daniela-mendez-mendez </a>
		        </div>
	        </footer>
    </body>
</html>
