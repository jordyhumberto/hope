<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	require '../../conexion.php';
	//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(!isset($_SESSION["id_usuario"])){
    	header("Location: ../../index.php");
	}
	$sql="SELECT * FROM tbl_semestre";
	$resultado=$mysqli->query($sql);
	$sql1="SELECT * FROM tbl_carrera";
	$resultado1=$mysqli->query($sql1);
	$sql2="SELECT * FROM tbl_cursos";
	$resultado2=$mysqli->query($sql2);
	$sql3="SELECT * FROM tbl_ciclo";
	$resultado3=$mysqli->query($sql3);
	$sql4="SELECT * FROM tbl_docente";
	$resultado4=$mysqli->query($sql4);
	$sql5="SELECT * FROM tbl_aula";
	$resultado5=$mysqli->query($sql5);

?>
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
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			<form class="form-horizontal" method="POST" action="p_a_h_guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="Proceso" class="col-sm-2 control-label">Proceso de Admisión</label>
					<div class="col-sm-10">
						<select class="form-control" id="proceso" name="proceso">
							<?php while($row = $resultado6->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDPadmision']; ?>"><?php echo $row['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="Carrera" class="col-sm-2 control-label">Carrera</label>
					<div class="col-sm-10">
						<select class="form-control" id="carrera" name="carrera">
							<?php while($row = $resultado3->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDCarrera']; ?>"><?php echo $row['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">Tipo de documento</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo de documento" required>
					</div>
					<label for="documento" class="col-sm-2 control-label"># de documento</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="documento" name="documento" placeholder="# de documento" required>
					</div>
				</div>
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
					</div>
				</div>	
			
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
                </div>
				<div class="form-group">
					<label for="colegio" class="col-sm-2 control-label">Colegio</label>
					<div class="col-sm-10">
						<select class="form-control" id="colegio" name="colegio">
							<?php while($row = $resultado5->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDcolegio']; ?>"><?php echo $row['Nombre']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="fechae" class="col-sm-2 control-label">Fecha de egreso</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechae" name="fechae">
					</div>
				</div>
				<div class="form-group">
					<label for="Pension" class="col-sm-2 control-label">Pensión Colegio</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="pension" name="pension" min="0" placeholder="Pension Colegio">
					</div>
				</div>
				<div class="form-group">
					<label for="mingreso" class="col-sm-2 control-label">Modalidad de Ingreso</label>
					<div class="col-sm-10">
						<select class="form-control" id="mingreso" name="mingreso">
							<?php while($row = $resultado1->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDMingreso']; ?>"><?php echo $row['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="alergia" class="col-sm-2 control-label">Alergia</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="alergia" name="alergia" placeholder="Alergia">
					</div>
					<label for="sangre" class="col-sm-2 control-label">Tipo de Sangre</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="sangre" name="sangre" placeholder="Tipo de Sangre">
					</div>
					<label for="discapacidad" class="col-sm-2 control-label">Discapacidad</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="discapacidad" name="discapacidad" placeholder="Discapacidad">
					</div>
				</div>
				<div class="form-group">
					<label for="comentario" class="col-sm-2 control-label">Comentario</label>
					<div class="col-sm-10">
						<textarea name="comentario" id="comentario" Style="width:100%;height:5vw;;resize:none;"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="Estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
								<option value="01">ACTIVO</option>
								<option value="00">INACTIVO</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefonot" class="col-sm-2 control-label">Telefono del Tutor</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="telefonot" name="telefonot" placeholder="Telefono del tutor">
					</div>
					<label for="Parentesco" class="col-sm-2 control-label">Nivel de Parentesco</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="parentesco" name="parentesco" placeholder="Parentesco">
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="m_g_alumno.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
			
		</div>
	</body>
</html>