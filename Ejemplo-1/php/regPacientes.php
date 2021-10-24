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
	$sql = "SELECT c.comu_codi, c.comu_nomb, m.muni_nomb "
			." FROM tb_comuna AS c"
			." INNER JOIN tb_municipio AS m "
			." ON (c.muni_codi = m.muni_codi) "
			." ORDER BY comu_nomb " ;

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
	/*echo "<pre>";
	var_dump($listado);
	echo "</pre>";*/
	echo json_encode($listado);

	#5. Cerrarl la conexión
	$conexion->close();
?>