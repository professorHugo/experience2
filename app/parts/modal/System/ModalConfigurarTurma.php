<?php
$QuerySelectConfirmTurma = "SELECT * FROM turmas WHERE id = '$ReturnTurmas[id]'";
$ExeQrSelectConfirmTurma = mysql_query($QuerySelectConfirmTurma);
while($ReturnTurma = mysql_fetch_assoc($ExeQrSelectConfirmTurma)){
    if($ReturnTurma['turma_confirmada'] == 1){
        include'parts/modal/System/ConfigurarTurmaAtiva.php';
    }else{
        include'parts/modal/System/ConfigurarTurmaNova.php';
    }
}
