<?php
$Turma = $_POST['IdTurma'];
echo $H_Entrada = $_POST['h_entrada'];
echo "<br>";
echo $H_Saida = $_POST['h_saida'];
echo "<br>";
echo $Professor = $_POST['professor'];
echo "<br>";
echo $Status = $_POST['status'];
echo "Salvando as alterações da turma: ". $NomeTurma = $_POST['NomeTurma'];
echo "<br>";

for($i=1;$i<=8;$i++){
    $modulo = "modulo".$i;
    " = ";
    $Modulo[$i] = $_POST['Modulo'.$i];
    "<br>";
    echo $QueryUpdateModulos = "UPDATE turmas SET $modulo = '$Modulo[$i]', turma_confirmada = '$Status' WHERE id = $Turma ";
    echo "<br>";
    
    $ExeQrUpdateModulos = mysql_query($QueryUpdateModulos);
}
if($ExeQrUpdateModulos){
    ?>
    <!-- Modal Turma alterada-->

    <?php
}