<header id="header">
<div class="cabecera">
    <div class="banner">
        <img class="l_upein" src="img/logo_upein.png" alt="Logo_upein">
        <div class="p_p">
            <div>
            <p class="p_upein">INTRANET</p>
            <p class="p_otro">UPEIN</p>
            </div>
            <p>イントラネット</p>	
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
            $cadena=$row['Nombre'];
            $token=strtok($cadena," ");
            echo $token;
            ?></p>
        </div>
    </div>
</div>
</header>