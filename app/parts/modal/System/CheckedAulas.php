<?php
$QueryBuscarAulas3 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula1 = 1";
$ExeQrBuscarAulas3 = mysql_query($QueryBuscarAulas3);
while($Aula1 = mysql_fetch_assoc($ExeQrBuscarAulas3)){
    if($AulasAssistidas['numero_aula'] == 1 && $Aula1['aula1'] = 1){
        echo "checked disabled";
    }
}

$QueryBuscarAulas4 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula2 = 1";
$ExeQrBuscarAulas4 = mysql_query($QueryBuscarAulas4);
while($Aula2 = mysql_fetch_assoc($ExeQrBuscarAulas4)){
    if($AulasAssistidas['numero_aula'] == 2 && $Aula2['aula2'] = 1){
        echo "checked disabled";
    }
}

$QueryBuscarAulas5 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula3 = 1";
$ExeQrBuscarAulas5 = mysql_query($QueryBuscarAulas5);
while($Aula3 = mysql_fetch_assoc($ExeQrBuscarAulas5)){
    if($AulasAssistidas['numero_aula'] == 3 && $Aula3['aula3'] = 1){
        echo "checked disabled";
    }
}

$QueryBuscarAulas6 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula4 = 1";
$ExeQrBuscarAulas6 = mysql_query($QueryBuscarAulas6);
while($Aula4 = mysql_fetch_assoc($ExeQrBuscarAulas6)){
    if($AulasAssistidas['numero_aula'] == 4 && $Aula4['aula4'] = 1){
        echo "checked disabled";
    }
}

$QueryBuscarAulas7 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula5 = 1";
$ExeQrBuscarAulas7 = mysql_query($QueryBuscarAulas7);
while($Aula5 = mysql_fetch_assoc($ExeQrBuscarAulas7)){
    if($AulasAssistidas['numero_aula'] == 5 && $Aula5['aula5'] = 1){
        echo "checked disabled";
    }
}

$QueryBuscarAulas8 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula6 = 1";
$ExeQrBuscarAulas8 = mysql_query($QueryBuscarAulas8);
while($Aula6 = mysql_fetch_assoc($ExeQrBuscarAulas8)){
    if($AulasAssistidas['numero_aula'] == 6 && $Aula6['aula6'] = 1){
        echo "checked disabled";
    }
}

$QueryBuscarAulas9 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula7 = 1";
$ExeQrBuscarAulas9 = mysql_query($QueryBuscarAulas9);
while($Aula7 = mysql_fetch_assoc($ExeQrBuscarAulas9)){
    if($AulasAssistidas['numero_aula'] == 7 && $Aula7['aula7'] = 1){
    echo "checked disabled";
}
}

$QueryBuscarAulas10 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula' AND aula8 = 1";
$ExeQrBuscarAulas10 = mysql_query($QueryBuscarAulas10);
while($Aula8 = mysql_fetch_assoc($ExeQrBuscarAulas10)){
    if($AulasAssistidas['numero_aula'] == 8 && $Aula8['aula8'] = 1){
        echo "checked disabled";
    }
}