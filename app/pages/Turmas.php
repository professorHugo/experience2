<?php
include_once 'parts/CadastrarTurma.php';
include_once 'parts/CadastrarHorarioTurma.php';
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
    if(isset($_POST['PesquisarTurma'])){
        if($_POST['NomeTurma'] !== ""){
            $Turma = $_POST['NomeTurma'];
            echo "Turma procurada: <b>$Turma</b><br>";
            echo $QueryBuscarTurmaPorNome = "SELECT * FROM turmas WHERE nome_turma LIKE '%".$Turma."%'";
            $ExeQrBuscarTurmaPorNome = mysql_query($QueryBuscarTurmaPorNome);
            if($ExeQrBuscarTurmaPorNome){
                while($ReturnTurmas = mysql_fetch_assoc($ExeQrBuscarTurmaPorNome)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $ReturnTurmas['id']?>
                        </td>
                        <td>
                            <?php echo $ReturnTurmas['nome_turma']?>
                        </td>
                        <td>
                            <?php echo $ReturnTurmas['professor_turma']?>
                        </td>
                        <td>
                            <?php echo $ReturnTurmas['curso_turma']?>
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
        }else{
            echo "Exibir todas as turmas";
        }
    }else{
        echo "Exibir todas as turmas";
    }

    if(isset($_POST['PesquisarHorario'])){
        if($_POST['PesquisarHorario'] !== ""){
            $Horario = $_POST['PesquisarHorario'];
            echo "Horario Pesquisado: <b>$Horario</b>";
        }        
    }
?>
</table>

<?php include_once'parts/FormCadastrarTurma.php' ?>
<?php include_once'parts/FormCadastrarHorarioTurma.php' ?>