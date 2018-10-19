<?php
if(isset($_POST['SalvarTurma'])){
    echo "Vai cadastrar a turma no sistema";
    echo "<br>";
    echo $Turma = $_POST['NomeDaTurma'];
    echo "<br>";
    echo $Professor = $_POST['Professor'];
    echo "<br>";
    echo $Curso = $_POST['Curso'];
    echo "<br>";
    echo $Horario = $_POST['Horario'];
    //Programar Cadastro da turma
}

if(isset($_POST['CadastrarHorarioTurma'])){
    echo "Vai cadastrar Horário da turma";
    echo "<br>";
    echo "Horario Inicial: ";
    echo $HorarioInicial = $_POST['HorarioInicial'];
    echo "<br>";
    echo "Horario Final: ";
    echo $HorarioFinal = $_POST['HorarioFinal'];
    echo "<br>";
    //Programação para cadastrar os horários das aulas
    $QueryCadastrarHorariosAulas = "INSERT INTO horario_aula(horario_entrada,horario_saida) VALUE('$HorarioInicial','$HorarioFinal')";
    
    //Verificar se há horário já cadastrado com os dados informados
    $QueryVerificaExistenciaHorario = "SELECT * FROM horario_aula WHERE horario_entrada = '$HorarioInicial' AND horario_saida = '$HorarioFinal'";
    $ExeQrVerificarExistenciaHorario = mysql_query($QueryVerificaExistenciaHorario);
    if(mysql_num_rows($ExeQrVerificarExistenciaHorario) >= 1){
        echo "Esse Horario já está Cadastrado";
    }else{
        echo "Horário ainda não cadastrado";
        $ExeQrCadastrarHorariosAulas = mysql_query($QueryCadastrarHorariosAulas);
    
        if($ExeQrCadastrarHorariosAulas){
            echo "<br>";
            echo "Horario Cadastrado";
        }else{
            echo "<br>";
            echo "Horario não cadastrado";
        }
    }
    
}
?>
<h3>Pesquisar / Cadastrar: Turmas e horários</h3>
<div class="col-md-6">
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

<?php include_once'parts/FormCadastrarTurma.php' ?>
<?php include_once'parts/FormCadastrarHorarioTurma.php' ?>


<?php
    if(isset($_POST['PesquisarTurma'])){
        if($_POST['NomeTurma'] !== ""){
            $Turma = $_POST['NomeTurma'];
            echo "Turma procurada: <b>$Turma</b>";
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