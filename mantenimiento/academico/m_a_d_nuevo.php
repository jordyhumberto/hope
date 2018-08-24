<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	require '../../conexion.php'; //Agregamos el script de Conexión
	//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(!isset($_SESSION["id_usuario"])){
		header("Location: ../../index.php");
	}
	$sql1= "SELECT * FROM tbl_semestre ORDER BY IDSemestre DESC";
	$resultado1 = $mysqli->query($sql1);
	$sql2= "SELECT * FROM tbl_universidad ORDER BY Descripcion";
	$resultado2 = $mysqli->query($sql2);
	$sql3= "SELECT * FROM tbl_pais ORDER BY Descripcion";
	$resultado3 = $mysqli->query($sql3);
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
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			<br>
			<form class="form-horizontal" method="POST" action="m_a_d_guardar.php" autocomplete="off">
			<div class="form-group">
					<label for="apaterno" class="col-sm-1 control-label">APaterno</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="apaterno" required>
					</div>
					<label for="amaterno" class="col-sm-1 control-label">AMaterno</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="amaterno" required>
					</div>
					<label for="nombre" class="col-sm-1 control-label">Nombre</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label for="tipo" class="col-sm-1 control-label">Tipo de documento</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo de documento" required>
					</div>
					<label for="documento" class="col-sm-1 control-label"># de documento</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="documento" name="documento" placeholder="# de documento" required>
					</div>
				</div>
				<div class="form-group">
					<label for="gacademico" class="col-sm-1 control-label">Grado academico</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="gacademico" name="gacademico" placeholder="MAYOR GRADO ACADÉMICO DEL DOCENTE ">
					</div>
					<label for="macademico" class="col-sm-1 control-label">Mencion Academica</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="macademico" name="macademico" placeholder="MENCIÓN DEL MAYOR GRADO DOCENTE">
					</div>
				</div>
				<div class="form-group">
					<label for="uacademico" class="col-sm-1 control-label">Universidad academica</label>
					<div class="col-sm-5">
						<select class="form-control" id="uacademico" name="uacademico">
								<option value="">NINGUNO</option>
							<?php while($row2 = $resultado2->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row2['IDUniversidad']; ?>"><?php echo $row2['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
					<label for="pacademico" class="col-sm-1 control-label">Pais Academica</label>
					<div class="col-sm-5">
						<select class="form-control" id="pacademico" name="pacademico">
								<option value="">NINGUNO</option>
							<?php while($row3 = $resultado3->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row3['IDPais']; ?>"><?php echo $row3['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<br>
				<h4 style="text-align:center">NIVELES DE PROGRAMA DE ESTUDIO EN LOS QUE DA CLASES EL DOCENTE</h4>
				<br>
				<div class="form-group">
					<label for="pregrado" class="col-sm-1 control-label">Pregrado</label>
					<div class="col-sm-3">
						<select class="form-control" id="pregrado" name="pregrado">
							<option value="Si" >Si</option>
							<option value="No" >No</option>
						</select>
					</div>
					<label for="maestria" class="col-sm-1 control-label">Maestria</label>
					<div class="col-sm-3">
						<select class="form-control" id="maestria" name="maestria">
							<option value="Si" >Si</option>
							<option value="No" >No</option>
						</select>
					</div>
					<label for="doctorado" class="col-sm-1 control-label">Doctorado</label>
					<div class="col-sm-3">
						<select class="form-control" id="doctorado" name="doctorado">
							<option value="Si" >Si</option>
							<option value="No" >No</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="categoria" class="col-sm-1 control-label">Categoria</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="categoria" name="categoria" placeholder="CATEGORÍA DOCENTE">
					</div>
					<label for="regimen" class="col-sm-1 control-label">Regimen</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="regimen" name="regimen" placeholder="RÉGIMEN DE DEDICACIÓN">
					</div>
				</div>
				<br>
				<h4 style="text-align:center">NÚMERO DE HORAS SEMANALES FIJADOS POR LA UNIVERSIDAD</h4>
				<br>
				<div class="form-group">
					<label for="hclases" class="col-sm-1 control-label">hclases</label>
					<div class="col-sm-3">
						<input type="number" class="form-control" id="hclases" name="hclases" placeholder="CLASES">
					</div>
					<label for="hotros" class="col-sm-1 control-label">hotros</label>
					<div class="col-sm-3">
						<input type="number" class="form-control" id="hotros" name="hotros" placeholder="OTRAS ACTIVIDADES">
					</div>
					<label for="htotal" class="col-sm-1 control-label">htotal</label>
					<div class="col-sm-3">
						<input type="number" class="form-control" id="htotal" name="htotal" placeholder="TOTAL HORAS SEMANALES">
					</div>
				</div>
				<div class="form-group">
					<label for="dinvestigador" class="col-sm-1 control-label">DInvestigador</label>
					<div class="col-sm-3">
						<select class="form-control" id="dinvestigador" name="dinvestigador">
							<option value="Si" >Si</option>
							<option value="No" >No</option>
						</select>
					</div>
					<label for="rdina" class="col-sm-1 control-label">RDina</label>
					<div class="col-sm-3">
						<select class="form-control" id="rdina" name="rdina">
							<option value="Si" >Si</option>
							<option value="No" >No</option>
						</select>
					</div>
					<label for="semestre" class="col-sm-1 control-label">semestre</label>
					<div class="col-sm-3">
						<select class="form-control" id="semestre" name="semestre">
							<?php while($row1 = $resultado1->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $row1['IDSemestre']; ?>"><?php echo $row1['Descripcion']; ?></option>	
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-1 control-label">Telefono</label>
					<div class="col-sm-5">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
					<label for="email" class="col-sm-1 control-label">Email</label>
					<div class="col-sm-5">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="puesto" class="col-sm-1 control-label">Puesto</label>
					<div class="col-sm-11">
						<input type="text" class="form-control" id="puesto" name="puesto" placeholder="Puesto que ocupa">
					</div>
				</div>
				<div class="form-group">
					<label for="estado" class="col-sm-1 control-label">Estado</label>
					<div class="col-sm-11">
						<select class="form-control" id="estado" name="estado">
							<option value="01">ACTIVO</option>
							<option value="00">INACTIVO</option>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="m_a_docente.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
			
		</div>
	</body>
</html>