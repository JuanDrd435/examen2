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
	
		$ingresarDatos = "INSERT INTO h_clinica(FechaIngreso, nom_usr, cc_usr, nom_medico, texto) VALUES ('$fechaAtenc','$nombrePac','$cedulaPc','$nombreMed','$descrip')";
		
		mysqli_query($conexion,$ingresarDatos);
		
		$conexion->close();
		
		}  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Atención Medica Pacientes</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-lg-2" id="log">
                <img src="../imgs/logo.png" alt="" style="max-width:100%;height:auto;">

            </div>
            <div class="col-lg-8" id="texto">
                <h3>Atención Medica Pacientes</h3>
                <p>En esta sección se realiza el registro de la atención a su paciente</p>

            </div>
        </div>

    </div>

    <div class="container">

        <form action="" method="POST">
            <div class="col">


            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label">Fecha de atencion</label>
                    <input type="date" class="form-control" id="nombre_pac" name="FechaIngreso"
                        placeholder="Fecha de atencion" value="2021-10-24" min="2021-01-01" max="2025-12-31">
                </div>
                <div class="col">
                    <label class="form-label">Nombre Paciente</label>
                    <input type="" class="form-control" id="nombre_pac" name="nom_usr"
                        placeholder="Ingrese el nombre del paciente" aria-describedby="emailHelp">
                </div>
                <div class="col">
                    <label class="form-label">Numero documento paciente</label>
                    <input type="" class="form-control" id="nombre_pac" name="cc_usr"
                        placeholder="Ingrese numero documento paciente" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="form-label">Id Medico</label>
                    <input type="" class="form-control" id="nombre_pac" name="medic_id"
                        placeholder="ID del medico" aria-describedby="emailHelp" value=""disabled>
                </div>
                <div class="col">
                    <label class="form-label">Nombre Medico</label>
                    <input type="" class="form-control" id="nombre_med" name="nom_medico"
                        placeholder="Nombre del medico que atiende" aria-describedby="emailHelp">
                </div>

                <div class="container">
                    <label class="form-label">Descripcion</label>
                    <input type="" class="form-control" id="nombre_pac" name="texto"
                        placeholder="Ingrese descripcion de la atencion" aria-describedby="emailHelp">
                       
                        <div id="btnSalir">
                        <div>
                <button type="submit" class="btn btn-primary" name="RegHistoria">Registrar historia</button>
            </div>
                        <br>
                        <a class="btn btn-danger" href="../index.html" role="button">Salir</a>
                        </br>
                    </div>

                </div>

                
            </div>
        </form>

    </div>




</body>

</html>
