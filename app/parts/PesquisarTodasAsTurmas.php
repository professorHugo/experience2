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
        
        include 'parts/modal/System/ModalConfigurarTurma.php';
    }
}