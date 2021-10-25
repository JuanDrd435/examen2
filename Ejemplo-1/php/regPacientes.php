<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Registro de Pacientes</title>
</head>
<body>


 <div id="titulo" class="container">
    <h1>Registrar paciente</h1>
 </div>

 <div class="container">
    <form id="fdatos" action="" method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre Paciente</label>
            <input type="" class="form-control" id="nombre_pac" name= "nombre" placeholder="Ingrese el nombre del paciente" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label class="form-label">Cedula Paciente</label>
            <input type="" class="form-control" id="cc_pac" name= "cedula" placeholder="Ingrese numero de documento">
        
        </div>
    
        <button type="submit" class="btn btn-primary" id="btnRegistrar"  name="registrar">Registrar</button>
		<a  class="btn btn-danger"  href="../index.html" role="button">Salir</a>
    </form>

 </div>

</body>
</html>
<?php

	# Las variables de la cadena de conexión

	$db_host = "localhost"; # La maquína en donde está MySQL
	$db_user = "root"; 		# Usuario en MySQL
	$db_pass = ""; 			# Clave del usuario
	$db_name = "examen2"; 	# El nombre de la BD

	#1. Establecer una conexión
	$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

	/*echo "<pre>";
	var_dump($conexion);
	echo "</pre>"; */

	if (isset($_POST['registrar'])) {
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
	
		$ingresarDatos = "INSERT INTO usr(nombre, cedula) VALUES ('$nombre','$cedula')";
		
		mysqli_query($conexion,$ingresarDatos);
		
		$conexion->close();
		
		}  



?>