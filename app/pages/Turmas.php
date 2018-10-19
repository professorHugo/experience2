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
    
    
    
}
?>
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

<?php include_once'parts/FormCadastrarTurma.php' ?>


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
?>