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
    echo $HorarioEntrada = $_POST['HorarioEntrada'];
    echo "<br>";
    echo $HorarioSaida = $_POST['HorarioSaida'];
    echo "<br>";
    //Programar Cadastro da turma
    $QueryCadastrarTurma = "
        INSERT INTO turmas(nome_turma,professor_turma,curso_turma,horario_entrada_turma,horario_saida_turma)
        VALUE('$Turma','$Professor','$Curso','$HorarioEntrada','$HorarioSaida')
    ";
    echo "<br>";
    //Verificar se a turma já existe
    $QueryVerificaExistenciaTurma = "SELECT * FROM turmas WHERE nome_turma = '$Turma' AND professor_turma = '$Professor' AND curso_turma = '$Curso' AND horario_entrada_turma = '$HorarioEntrada' AND horario_saida_turma = '$HorarioSaida'";
    $ExeQrVerificaExistenciaTurma = mysql_query($QueryVerificaExistenciaTurma);
    
    if(mysql_num_rows($ExeQrVerificaExistenciaTurma) >= 1){
        echo "Turma Já existe";
    }else{
        $ExeQrCadastrarTurma = mysql_query($QueryCadastrarTurma);
        if($ExeQrCadastrarTurma){
            echo "Turma <br>$Turma</b> cadastrada com sucesso!";
        }else{
            echo "<br>Deu ruim: ".mysql_error();
        }
    }
}
