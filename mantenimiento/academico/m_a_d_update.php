<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	require '../../conexion.php'; //Agregamos el script de Conexión
	if(!isset($_SESSION["id_usuario"])){
		header("Location: ../../index.php");
	}
	$id=$_POST['id'];
    $apaterno=$_POST['apaterno'];
    $amaterno=$_POST['amaterno'];
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    $documento=$_POST['documento'];
    $gacademico=$_POST['gacademico'];
    $macademico=$_POST['macademico'];
    $uacademico=$_POST['uacademico'];
    $pacademico=$_POST['pacademico'];
    $pregrado=$_POST['pregrado'];
    $maestria=$_POST['maestria'];
    $doctorado=$_POST['doctorado'];
    $categoria=$_POST['categoria'];
    $regimen=$_POST['regimen'];
    $hclases=$_POST['hclases'];
    $hotros=$_POST['hotros'];
    $htotal=$_POST['htotal'];
    $dinvestigador=$_POST['dinvestigador'];
    $rdina=$_POST['rdina'];
    $semestre=$_POST['semestre'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $puesto=$_POST['puesto'];
    $estado=$_POST['estado'];

	$sql = "UPDATE tbl_docente SET APaterno='$apaterno',AMaterno='$amaterno',Nombres='$nombre',TDocumento='$tipo',NDocumento='$documento',GAcademico='$gacademico',MAcademico='$macademico',IDUniversidad='$uacademico',IDPais='$pacademico',Pregrado='$pregrado',Maestria='$maestria',Doctorado='$doctorado',Categoria='$categoria',Regimen='$regimen',HClases='$hclases',HOtros='$hotros',HTotal='$htotal',DInvestigador='$dinvestigador',RDina='$rdina',IDSemestre='$semestre',Telefono='$telefono',Email='$email',Puesto='$puesto',Estado='$estado' WHERE IDDocente = '$id'";
	$resultado = $mysqli->query($sql);
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
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					<a href="m_a_docente.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>