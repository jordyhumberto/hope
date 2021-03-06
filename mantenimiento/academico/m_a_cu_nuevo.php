<?php
    session_start(); //Inicia una nueva sesión o reanuda la existente
	require '../../conexion.php';
	//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(!isset($_SESSION["id_usuario"])){
    	header("Location: ../../index.php");
	}
    $sql1 = "SELECT * FROM tbl_carrera ORDER BY IDCarrera";
    $resultado1 = $mysqli->query($sql1);
    $sql2 = "SELECT * FROM tbl_ciclos ORDER BY IDCiclo";
    $resultado2 = $mysqli->query($sql2);
    $sql3 = "SELECT * FROM tbl_tipo_aula ORDER BY IDTA";
	$resultado3 = $mysqli->query($sql3);
	$sql4 = "SELECT * FROM tbl_cursos ORDER BY Descripcion";
    $resultado4 = $mysqli->query($sql4);
?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
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
			<br>
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			<br>
			<form class="form-horizontal" method="POST" action="m_a_cu_guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="carrera" class="col-sm-2 control-label">Carrera</label>
					<div class="col-sm-10">
						<select class="form-control" id="carrera" name="carrera">
							<?php while($row = $resultado1->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDCarrera']; ?>"><?php echo $row['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="año" class="col-sm-2 control-label">AÑO</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="año" name="año" placeholder="año númerico" required>
					</div>
					<label for="semestre" class="col-sm-2 control-label">SEMESTRE</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="semestre" name="semestre" placeholder="semestre en número romanos" required>
					</div>
				</div>
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">IDCURSO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id" name="id" placeholder="Id del curso" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="tipoc" class="col-sm-2 control-label">Tipo de Curso</label>
					<div class="col-sm-4">
						<select class="form-control" id="tipoc" name="tipoc">
							<option value="B">Basico</option>
                            <option value="G">General</option>
                            <option value="P">Profesional</option>
						</select>
					</div>
					<label for="ciclo" class="col-sm-2 control-label">Ciclo</label>
					<div class="col-sm-4">
						<select class="form-control" id="ciclo" name="ciclo">
							<?php while($row = $resultado2->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDCiclo']; ?>"><?php echo $row['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
                
				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" required>
					</div>
				</div>
                
                
				<div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">Tipo</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo" name="tipo">
							<option value="O">Obligatorio</option>
                            <option value="E">Electivo</option>
						</select>
					</div>
				</div>
                <div class="form-group">
					<label for="horast" class="col-sm-2 control-label">Horas teoricas</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="horast" name="horast" placeholder="horas teoricas" required>
					</div>
					<label for="horasp" class="col-sm-2 control-label">Horas Practicas</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="horasp" name="horasp" placeholder="horas practicas" required>
					</div>
				</div>
				<div class="form-group">
					<label for="creditos" class="col-sm-2 control-label">Creditos</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="creditos" name="creditos" placeholder="creditos" required>
					</div>
					<label for="creditosr" class="col-sm-2 control-label">Creditos Requeridos</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="creditosr" name="creditosr" placeholder="creditos requeridos">
					</div>
				</div>
				
				<div class="form-group">
					<label for="pre" class="col-sm-2 control-label">PREREQUISITO</label>
					<div class="col-sm-10">
						<select class="form-control" id="pre" name="pre">
							<option value="">NO TIENE</option>
							<?php while($row = $resultado4->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDCursos']; ?>"><?php echo $row['Descripcion'].' '.$row['IDCarrera']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="plan" class="col-sm-2 control-label">PLAN DE ESTUDIO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="plan" name="plan" placeholder="Plan de Estudio" required>
					</div>
				</div>
				<div class="form-group">
					<label for="tipoa" class="col-sm-2 control-label">Tipo Aula</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipoa" name="tipoa">
							<?php while($row = $resultado3->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row['IDTA']; ?>"><?php echo $row['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="01">ACTIVO</option>
							<option value="00">INACTIVO</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="m_a_curso.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
			
		</div>
	</body>
</html>