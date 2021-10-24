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

	#2. Definir la acción a realizar (SQL)
	$sql = "SELECT * FROM h_clinica" ;

	#3. Ejecutar la sentencia
	$resultado = $conexion->query($sql)
		or die(mysqli_errno($conexion) . " : "
			. mysqli_error($conexion) . " | Query=" . $sql);
		

	/*echo "<pre>";
	var_dump($resultado);
	echo "</pre>"; */

	#4. Gestionar el resultado
	/* $primerRegistro = $resultado->fetch_assoc();
	echo "<pre>";
	print_r($primerRegistro);
	echo "</pre>";
	*/
	
	$listado = array();
	while ($fila = $resultado->fetch_assoc()) {
		$listado[] = $fila;
	}
	/*
	echo "<pre>";
	var_dump($listado);
	echo "</pre>";
	echo json_encode($listado);*/

	#5. Cerrarl la conexión
	$conexion->close();
?>

<html>

<head>
	<meta charset="utf-8">
	<title>Consulta realizada</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
</head>

<body>
	<div class="container-fluid py-5">
		<h1 class="display-5 fw-bold">Consulta</h1>
	</div>
	<div class="container">
		<div class="card">
			<div class="card-header bg-primary">
				Listado 
			</div>
			<div class="card-body">
				<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Código</th>
							<th>Fecha</th>
							<th>Nombre del medico</th>
							<th>Nombre del paciente</th>
							<th>cedula paciente</th>
							
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($listado as $fila) { ?>
							<tr>
								<td><?php echo $fila['id_post'] ?> </td>
								<td><?php echo utf8_encode($fila['FechaIngreso']) ?> </td>
								<td><?php echo utf8_encode($fila['nom_usr']) ?> </td>
								<td><?php echo utf8_encode($fila['cc_usr']) ?> </td>
								<td><?php echo utf8_encode($fila['nom_medico']) ?> </td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

	<script>
		$(document).ready(function() {
			$("#tabla").DataTable();
		});
	</script>
</body>

</html>
