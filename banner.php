<?php
$idU=$_SESSION["id_usuario"];
$sqlU="SELECT * FROM usuarios WHERE Id_Usuario='$idU'";
$resultadoU=$mysqli->query($sqlU);
$rowU=$resultadoU->fetch_array(MYSQLI_ASSOC);
?>
<header id="header">
    <div class="cabecera">
        <div class="banner">
            <img class="l_upein" src="img/logo_upein.png" alt="Logo_upein">
            <div class="p_p">
                <!-- <div> -->
                <p class="p_upein">INTRANET</p>
                <p class="p_otro">UPEIN</p>
                <!-- </div>
                <p>イントラネット</p>	 -->
            </div>
        </div>
        <div class="cont-usuario">
            <div class="usuario">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <!-- <div>
                    <p>ジョーディ</p>
                    <p>イエス</p>
                </div> -->
                <p><?php 
                $cadenaU=$rowU['Nombre'];
                $tokenU=strtok($cadenaU," ");
                echo $tokenU;
                ?></p>
            </div>
        </div>
    </div>
</header>