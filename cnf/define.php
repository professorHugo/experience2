<?php
//Off-line NOTEBOOK
/**/
$HOST = "localhost";
$USER = "root";
$PASS = "";
$DDB = "n2yco435_experience";

$conexao = mysql_connect($HOST, $USER, $PASS)or die(mysql_error);
mysql_select_db($DDB, $conexao) or die(mysql_error);

if(!$conexao){
    echo "Impossível se conectar ao MySQL. ".PHP_EOL."<br>";
    echo "Debugging errno: " . mysql_connect_errno() . PHP_EOL;
    echo "Debugging errno: " . mysql_connect_errno() . PHP_EOL;
    exit;
}
/*
//On-Line HOSTGATOR
define("HOST","localhost");
define("USUARIO","n2yco435_exp");
define("SENHA","l_i$}hdv3]NV");
define("DDB","n2yco435_experience");
$conexao = mysql_connect(HOST, USUARIO, SENHA) or die (mysql_error);
mysql_select_db(DDB, $conexao) or die (mysql_error);
/*
//On-Line HOSTINGER
define("HOST","mysql.hostinger.com.br");
define("USUARIO","u689132642_vtraj");
define("SENHA","casolada13231010");
define("DDB","u689132642_vtraj");
$conexao = mysql_connect(HOST, USUARIO, SENHA) or die (mysql_error);
mysql_select_db(DDB, $conexao) or die (mysql_error);
/**/
