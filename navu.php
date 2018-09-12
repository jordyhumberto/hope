<div class="wrapper">
        <!-- <h1>Pure CSS Accordion</h1> -->
    <div class="half">
          <!-- <p>Open <strong>one</strong></p> -->
        <div class="tab blue">
            <input id="tab-mantenimiento" type="radio" name="tabs2">
            <label for="tab-mantenimiento">Mantenimiento</label>
            <div class="tab-content">
                <div class="tabI blueI">
                    <input id="tabI-general" type="radio" name="tabIs2">
                    <label for="tabI-general">General</label>
                    <div class="tabI-contentI">
                        <p><a href="mantenimiento/general/m_g_alumno.php">Alumno</a></p>
                        <p><a href="mantenimiento/general/m_g_colegio.php">Colegio</a></p>
                        <p><a href="mantenimiento/general/m_g_semestre.php">Semestre</a></p>
                        <p><a href="mantenimiento/general/m_g_detalle.php">Det_Sem</a></p>
                        <p><a href="mantenimiento/general/m_g_tipo.php">Tipo de Pago</a></p>
                    </div>
                </div>
                <div class="tabI blueI">
                    <input id="tabI-academico" type="radio" name="tabIs2">
                    <label for="tabI-academico">Academico</label>
                    <div class="tabI-contentI">
                        <p><a href="mantenimiento/academico/m_a_plan.php">Plan de estudio</a></p>
                        <p><a href="mantenimiento/academico/m_a_ciclo.php">Ciclos</a></p>
                        <p><a href="mantenimiento/academico/m_a_curso.php">Cursos</a></p>
                        <p><a href="mantenimiento/academico/m_a_tipo_aula.php">Tipo de aula</a></p>
                        <p><a href="mantenimiento/academico/m_a_aula.php">Aula</a></p>
                        <p><a href="mantenimiento/academico/m_a_docente.php">Docentes</a></p>
                        <p><a href="mantenimiento/academico/m_a_curso_docente.php">Cursos-Docentes</a></p>
                    </div>
                </div>
                <div class="tabI blueI">
                    <input id="tabI-administrativo" type="radio" name="tabIs2">
                    <label for="tabI-administrativo">Administrativo</label>
                    <div class="tabI-contentI">
                        <p><a href="mantenimiento/administrativo/m_ad_beca.php">Becas</a></p>
                        <p><a href="mantenimiento/administrativo/m_ad_facultad.php">Facultad</a></p>
                        <p><a href="mantenimiento/administrativo/m_ad_carrera.php">Carrera</a></p>
                        <p><a href="#">categoria</a></p>
                        <p><a href="mantenimiento/administrativo/m_ad_modalidad_ingreso.php">Modo de Ingreso</a></p>
                        <p><a href="mantenimiento/administrativo/m_ad_proceso.php">Proceso Admision</a></p>
                        <p><a href="mantenimiento/administrativo/m_ad_becaa.php">Asignar Beca</a></p>
                        <p><a href="#">Usuarios</a></p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="tab blue">
            <input id="tab-procesos" type="radio" name="tabs2">
            <label for="tab-procesos">Procesos</label>
            <div class="tab-content">
                <div class="tabI blueI">
                    <input id="tabI-matricula" type="radio" name="tabIs2">
                    <label for="tabI-matricula">Matricula</label>
                    <div class="tabI-contentI">
                        <p><a href="proceso/matricula/p_m_matricula.php">Matricula</a></p>
                        <p><a href="#">Anular-Matricula</a></p>
                    </div>
                </div>
                <div class="tabI blueI">
                    <input id="tabI-descuentos" type="radio" name="tabIs2">
                    <label for="tabI-descuentos">Descuentos</label>
                    <div class="tabI-contentI">
                        <p><a href="#">Descuentos</a></p>
                        <p><a href="#">Anular-Descuentos</a></p>
                    </div>
                </div>
                <div class="tabI blueI">
                    <input id="tabI-pagos" type="radio" name="tabIs2">
                    <label for="tabI-pagos">Pagos</label>
                    <div class="tabI-contentI">
                        <p><a href="#">Pagos</a></p>
                        <p><a href="#">Adelantos</a></p>
                        <p><a href="#">Anular-Pagos</a></p>
                    </div>
                </div>
                <div class="tabI blueI">
                    <input id="tabI-horario" type="radio" name="tabIs2">
                    <label for="tabI-horario">Academico</label>
                    <div class="tabI-contentI">
                        <p><a href="proceso/academico/p_a_horario.php">Horario</a></p>
                        <p><a href="proceso/academico/p_a_cursoo.php">Curso-Operativo</a></p>
                        <p><a href="#">Horario-Clases</a></p>
                        <p><a href="#">Cursos-Alumno</a></p>
                        <p><a href="proceso/academico/p_a_registronotas.php">Registro-Notas</a></p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="tab blue">
            <input id="tab-consultas" type="radio" name="tabs2">
            <label for="tab-consultas">Consultas</label>
            <div class="tab-content">
                <p><a href="consultas/alumnos/c_a_alumnos.php">Alumnos</a></p>
                <p><a href="consultas/pagoalumnos/c_pgs_pagoalumnos.php">Compromiso Alumnos</a></p>
                <p><a href="consultas/pagofecha/c_pf_pagofecha.php">Pagos por Fecha</a></p>
                <p><a href="consultas/matricula/c_m_matricula.php">Matricula Alumno</a></p>
                <p><a href="consultas/pagoalumno/c_pg_pagoalumno.php">Pago Alumnos</a></p>
                <p><a href="consultas/verpago/c_v_verpago.php">Ver Pagos</a></p>
                <p><a href="consultas/notasalumno/c_n_notasalumno.php">Notas por Alumno</a></p>
                <p><a href="#">Pagos por Tipo</a></p>
            </div>
        </div> 
        <div class="tab blue">
            <input id="tab-reportes" type="radio" name="tabs2">
            <label for="tab-reportes">Reportes</label>
            <div class="tab-content">
                <p><a href="#">Pagos por Proceso</a></p>
                <p><a href="#">Historico de Pagos</a></p>
                <p><a href="#">Notas por cuso ope.</a></p>
                <p><a href="#">Notas Registradas.</a></p>
                <p><a href="#">Horario Alumnos.</a></p><!--no sirve-->
                <p><a href="#">Horario Docente.</a></p><!--no sirve-->
                <p><a href="#">Horario Aula.</a></p><!--no sirve-->
            </div>
        </div> 
        <div class="tab blue">
            <input id="tab-logout" type="radio" name="tabs2">
            <label for="tab-logout">Logout</label>
            <div class="tab-content">
                <p><a href="logout.php">Salir</a></p>
            </div>
        </div> 
    </div>
</div>