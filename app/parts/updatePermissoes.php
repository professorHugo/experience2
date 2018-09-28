<?php
$QueryAtualizarSession = "SELECT * FROM usuarios WHERE matricula = '$Matricula'";
$ExeQrAtualizarSession = mysql_query($QueryAtualizarSession);
"<br>";
while($ResUpdateSession = mysql_fetch_assoc($ExeQrAtualizarSession)){
  "Session up to date<br>";
  $_SESSION['Login']['permissao'] = $ResUpdateSession['permissao'];
  if($_SESSION['Login']['permissao'] == 0){
    "Permissão de Aluno";
  }else if($_SESSION['Login']['permissao'] == 1){
    "Permissão de professor";
  }else{
    "Permissão de Administrador";
  }
}
