<?php
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