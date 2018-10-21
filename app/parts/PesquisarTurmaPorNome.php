<?php
if($_POST['NomeTurma'] !== ""){
    $Turma = $_POST['NomeTurma'];
    "Turma procurada: <b>$Turma</b><br>";
    $QueryBuscarTurmaPorNome = "SELECT * FROM turmas WHERE nome_turma LIKE '%".$Turma."%'";
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
            echo include 'parts/modal/System/ModalConfigurarTurma.php';
        }
    }
}elseif($_POST['NomeTurma'] == ""){
    "Exibir todas as turmas";
    $ExeQrBuscarTodasAsTurmas = mysql_query($QueryBuscarTodasAsTurmas);

    if($ExeQrBuscarTodasAsTurmas){
        while($ReturnTudoTurma = mysql_fetch_assoc($ExeQrBuscarTodasAsTurmas)){
            ?>
            <tr>
                <td>
                    <?php echo $ReturnTudoTurma['id']?>
                </td>
                <td>
                    <?php echo $ReturnTudoTurma['nome_turma']?>
                </td>
                <td>
                    <?php echo $ReturnTudoTurma['professor_turma']?>
                </td>
                <td>
                    <?php echo $ReturnTudoTurma['curso_turma']?>
                </td>
                <td>
                    <?php echo $ReturnTudoTurma['horario_entrada_turma']?>
                </td>
                <td>
                    <?php echo $ReturnTudoTurma['horario_saida_turma']?>
                </td>
                <td>
                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".ConfigurarTurma<?php echo $ReturnTudoTurma['id']?>">
                       <i class="glyphicon glyphicon-cog"></i>
                   </button>
                </td>
            </tr>
            <?php
            include 'parts/modal/System/ModalConfigurarTurma.php';
        }
    }
}