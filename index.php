<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleados";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> WebMaster Empleados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
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
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <h1>Ingrese datos</h1>
                            <form action="insertar.php" method="post">
                                <input type="text" name="nombre" placeholder="Nombre">
                                <input type="text" name="ape" placeholder="Apellidos">
                                <input type="email" name="correo" placeholder="micorreo@gmail.com">
                                <input type="date" name="fecha_nac">
                                <input type="text" name="esp" placeholder="Especialización">
                                <input type="submit" name="empleado">
                            </form>
                        </div>

                        <div class="col-md-8">
                            <h1>Registro de Datos</h1>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Especialidad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['id']?></td>
                                                <td><?php  echo $row['nombre']?></td>
                                                <td><?php  echo $row['apellidos']?></td>
                                                <td><?php  echo $row['email']?></td>  
                                                <td><?php  echo $row['fecha_nac']?></td>  
                                                <td><?php  echo $row['especializacion']?></td>    
                                                <td><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
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