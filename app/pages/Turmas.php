<?php
include_once 'parts/CadastrarTurma.php';
include_once 'parts/CadastrarHorarioTurma.php';
if(isset($_POST['SalvarConfiguracao'])){
    include_once 'parts/modal/System/SalvarConfiguracaoTurma.php';
}
?>
<div class="col-md-6">
   <h3>Pesquisar por nome: </h3>
    <form action="index.php?page=Turmas" class="form-inline" method="post">
        <div class="form-group">
            <label for="NomeTurma">Nome da Turma:</label>
            <input type="text" id="NomeTurma" name="NomeTurma" class="form-control" placeholder="Nome da Turma">
        </div>
        <button type="submit" class="btn bnt-default" name="PesquisarTurma">Pesquisar</button>
        <button type="button" class="btn btn-success" id="CadastrarTurma" title="Cadastrar nova Turma" data-toggle="modal" data-target=".ModalCadastrarTurma">
            <i class="glyphicon glyphicon-plus-sign"></i>
        </button>
    </form>
</div>
<div class="col-md-6">
   <h3>Pesquisar por Horário: </h3>
    <form action="index.php?page=Turmas" class="form-inline" method="post">
        <div class="form-group">
            <label for="PesquisarHorarioInicial">Horario Turma:</label>
            <select name="PesquisarHorarioInicial" id="PesquisarHorarioInicial" class="form-control">
                <?php
                $QueryBuscarTodosHorariosEntrada = "SELECT * FROM horario_aula ORDER BY horario_entrada ASC";
                $ExeQrBuscarTodosHorariosEntrada = mysql_query($QueryBuscarTodosHorariosEntrada);
                if($ExeQrBuscarTodosHorariosEntrada){
                    while($HorarioEntrada = mysql_fetch_assoc($ExeQrBuscarTodosHorariosEntrada)){
                        ?>
                        <option value="<?php echo $HorarioEntrada['horario_entrada']?>">
                            <?php echo $HorarioEntrada['horario_entrada']?>
                        </option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn bnt-default" name="PesquisarHorario">Pesquisar</button>
        <button type="button" class="btn btn-success" title="Cadastrar novo Horário Inicial" data-toggle="modal" data-target=".ModalCadastrarHorarioInicial">
            <i class="glyphicon glyphicon-plus-sign"></i>
        </button>
    </form>
</div>

<div class="clearfix" style="margin-bottom:15px"></div>
<table class="table table-striped table-responsive table-hover table-bordered text-center">
    <tr>
        <td>ID</td>
        <td>Turma</td>
        <td>Professor</td>
        <td>Curso</td>
        <td>Entrada</td>
        <td>Saída</td>
        <td>Configurar</td>
    </tr>
    <?php
    if(isset($_POST['PesquisarTurma']) && !empty($_POST['NomeTurma'])){
        "Turma Pesquisada: ".$Turma = $_POST['NomeTurma'];
        include 'parts/PesquisarTurmaPorNome.php';
    }else if($_POST['NomeTurma'] == "" && !isset($_POST['PesquisarHorario'])){
        //echo "Exibir todas as turmas";
        //echo "Turma Pesquisada: ".$Turma = $_POST['NomeTurma'];
        include 'parts/PesquisarTodasAsTurmas.php';
    }

    if(isset($_POST['PesquisarHorario'])){
        $Horario = $_POST['PesquisarHorarioInicial'];
        "Horario Pesquisado: <b>$Horario</b><br>";
        $QueryBuscarTurmaPorHorario = "SELECT * FROM turmas WHERE horario_entrada_turma = '$Horario'";
        $ExeQrBuscarTurmasPorHorario = mysql_query($QueryBuscarTurmaPorHorario);
        if(mysql_num_rows($ExeQrBuscarTurmasPorHorario) >= 1){
            while($ReturnTurmas = mysql_fetch_assoc($ExeQrBuscarTurmasPorHorario)){
            ?>
                <tr>
                    <td>
                        <?php echo $ReturnTurmas['id']?>
                    </td>
                    <td>
                        <?php echo $ReturnTurmas['nome_turma']?>
                    </td>
                    <td>
                        <?php
                            $Professor = $ReturnTurmas['professor_turma'];
                            $QueryBuscarProfessor = "SELECT * FROM usuarios WHERE id = '$Professor'";
                            $ExeQrBuscarProfessor = mysql_query($QueryBuscarProfessor);
                            if(mysql_num_rows($ExeQrBuscarProfessor) >= 1){
                                while($NomeProfessor = mysql_fetch_assoc($ExeQrBuscarProfessor)){
                                    echo $NomeProfessor['nome'];
                                }
                            }

                        ?>
                    </td>
                    <td>
                        <?php
                        $Curso = $ReturnTurmas['curso_turma'];
                        $QueryBuscarCurso = "SELECT * FROM cursos WHERE id = '$Curso'";
                        $ExeQrBuscarCurso = mysql_query($QueryBuscarCurso);
                        if(mysql_num_rows($ExeQrBuscarCurso) >= 1){
                            while($NomeCurso = mysql_fetch_assoc($ExeQrBuscarCurso)){
                                echo $NomeCurso['nome_curso'];
                            }
                        }
                        
                        ?>
                    </td>
                    <td>
                        <?php echo $ReturnTurmas['horario_entrada_turma']?>
                    </td>
                    <td>
                        <?php echo $ReturnTurmas['horario_saida_turma']?>
                    </td>
                    <td>
                       <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".ConfigurarTurma<?php echo $ReturnTurmas['id']?>">
                           <i class="glyphicon glyphicon-cog"></i>
                       </button>
                    </td>
                </tr>
                <?php
                //Criar Modal para configurar turma
                include 'parts/modal/System/ModalConfigurarTurma.php';
            }
        }
    }
?>
</table>

<?php include_once'parts/FormCadastrarTurma.php' ?>
<?php include_once'parts/FormCadastrarHorarioTurma.php' ?>