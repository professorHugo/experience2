<?php
$QueryBuscarTodasAsTurmas = "SELECT * FROM turmas";
$ExeQrBuscarTodasAsTurmas = mysql_query($QueryBuscarTodasAsTurmas);

if($ExeQrBuscarTodasAsTurmas){
    while($ReturnTurmas = mysql_fetch_assoc($ExeQrBuscarTodasAsTurmas)){
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
        
        include 'parts/modal/System/ModalConfigurarTurma.php';
    }
}