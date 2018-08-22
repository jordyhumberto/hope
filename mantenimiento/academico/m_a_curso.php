<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	require '../../conexion.php';
	//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(!isset($_SESSION["id_usuario"])){
    	header("Location: ../../index.php");
	}
	$sql = "SELECT * FROM tbl_cursos";
	$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="universidad, peruana, investigación, investigacion, negocios, upein, UPEIN">
  	<meta name="description" content="UPEIN! - Universidad Peruana de Invesitgacion y Negocios da la bienvenida a sus nuevos estudiantes">
	<title>Intranet</title>
    <link href="../../img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/bootstrap-theme.css" rel="stylesheet">
	<script src="../../js/jquery-3.3.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>	
	<link href="../../css/jquery.dataTables.min.css" rel="stylesheet">	
	<script src="../../js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="../../css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Ultra" rel="stylesheet">
	<script>
		$(document).ready(function(){
			$('#mitabla').DataTable({
				"order": [[1, "asc"]],
				"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
					"infoEmpty": "No hay registros disponibles",
					"infoFiltered": "(filtrada de _MAX_ registros)",
					"loadingRecords": "Cargando...",
					"processing":     "Procesando...",
					"search": "Buscar:",
					"zeroRecords":    "No se encontraron registros coincidentes",
					"paginate": {
						"next":       "Siguiente",
						"previous":   "Anterior"
					},					
				}
			});	
		});	
	</script>
</head>
<body>
<div class="contenedor">
		<?php include "../../banneru.php";?>
		<div class="cuerpo" style="display:flex;">
			<div class="lado1"><?php include '../../nav.php'?></div>
			<div class="lado2">
				<div class="container">
				<div class="row" style="background:#FF6C60;border-radius:.8vw .8vw 0 0;">
					<h2 style="text-align:center;color:#ffff;">Formulario de Cursos</h2>
				</div>
				<br>
				<div class="row">
					<a href="m_a_cu_nuevo.php" class="btn btn-primary">Nuevo Registro</a>
				</div>
				<br>
				<div class="row table-responsive">
				<table class="display" id="mitabla">
						<thead>
							<tr>
								<th>PlanEstudio</th>
								<th>Carrera</th>
								<th>IDCurso</th>
								<th>Descripcion</th>
								<th>Ciclo</th>
								<th>Modificar</th>
								<th>Borrar</th>
							</tr>
						</thead>
						<tbody>
							<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
								<tr>
									<td><?php echo $row['Plan_estudio']; ?></td>
									<td><?php echo $row['IDCarrera'];?></td>
									<td><?php echo $row['IDCursos']; ?></td>
									<td><?php echo $row['Descripcion'];?></td>
									<td><?php echo $row['IDCiclo']; ?></td>
									<td><a href="m_a_cu_modificar.php?IDCursos=<?echo $row['IDCursos'];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td><a href="m_a_cu_delete.php?IDCursos=<?echo $row['IDCursos'];?>"><span class="glyphicon glyphicon-trash"></span></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>	
			</div>
		</div>
		<?php include "../../footer.php";?>
	</div>
</body>
</html>