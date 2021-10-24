<?php

	$db_host = "localhost"; 
	$db_user = "root"; 		
	$db_pass = ""; 		
	$db_name = "examen2"; 	

	$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

	if (isset($_POST['RegHistoria'])) {

		$fechaAtenc = $_POST['FechaIngreso'];
	
        $nombrePac = $_POST['nom_usr'];
        $cedulaPc = $_POST['cc_usr'];
        $nombreMed = $_POST['nom_medico'];
		$descrip = $_POST['texto'];
	
		$ingresarDatos = "INSERT INTO h_clinica(FechaIngreso, nom_usr, cc_usr, nom_medico, texto) VALUES ('$nombre','$cedula','$nombre','$cedula')";
		
		mysqli_query($conexion,$ingresarDatos);
		
		$conexion->close();
		
		}  



?>