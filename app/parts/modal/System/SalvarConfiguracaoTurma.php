<?php
$Turma = $_POST['IdTurma'];
echo "Salvando as alterações da turma: ". $_POST['NomeTurma'];
echo "<br>";

for($i=1;$i<=8;$i++){
    $modulo = "modulo".$i;
    " = ";
    $Modulo[$i] = $_POST['Modulo'.$i];
    "<br>";
    $QueryUpdateModulos = "UPDATE turmas SET $modulo = '$Modulo[$i]' WHERE id = $Turma";
    "<br>";
    
    $ExeQrUpdateModulos = mysql_query($QueryUpdateModulos);
}
if($ExeQrUpdateModulos){
    echo "Update Realizado com sucesso";
}