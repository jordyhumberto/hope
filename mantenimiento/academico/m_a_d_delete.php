<?php 
session_start(); //Inicia una nueva sesión o reanuda la existente
require '../../conexion.php';
//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
if(!isset($_SESSION["id_usuario"])){
    header("Location: ../../index.php");
}
$IDDocente=$_GET['IDDocente'];
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
				<div class="row" style="text-align:center">
                    <h3>¿Desea eliminar este regristro?</h3>
					<a href="m_a_docente.php" class="btn btn-primary">Regresar</a>
                    <a href="m_a_d_borrar.php?IDDocente=<?php echo $IDDocente;?>" class="btn btn-primary">Borrar</a>
				</div>
			</div>
		</div>
	</body>
</html>