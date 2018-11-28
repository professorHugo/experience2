<?php
$Turma = $_POST['IdTurma'];
echo "Salvando as alterações da turma: ". $_POST['NomeTurma'];
echo "<br>";

for($i=1;$i<=8;$i++){
    echo $modulo = "modulo".$i;
    echo " = ";
    echo $Modulo[$i] = $_POST['Modulo'.$i];
    echo "<br>";
    echo $QueryUpdateModulos = "UPDATE turmas SET $modulo = '$Modulo[$i]' WHERE id = $Turma";
    echo "<br>";
    
    $ExeQrUpdateModulos = mysql_query($QueryUpdateModulos);
    
    if($ExeQrUpdateModulos){
        echo "Update Realizado com sucesso";
    }
}