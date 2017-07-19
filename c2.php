<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="contato";

$conexão=@mysql_connect($servidor,$usuario,$senha)or die(mysql_error());
mysql_select_db($banco)or die(mysql_error());

session_start();

$nome=$_POST['nome'];
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];
$sql=mysql_query("INSERT INTO contatocliente(nome,email,mensagem)
values('$nome','$email','$mensagem')");
/*voltar para a pagina contato*/
header("Location:Cliente.html");

session_destroy();
/*<!-- criar codigo de conexão antes da tag html-->
<?php

$host = "localhost"; //servidor local//
$user = "root";      // usuario padrao myadmim//
$pass = "";          // vazio nao possui password//
$banco = "estudo"; //nome do banco de dados//
$conexao = mysql_connect($host, $user , $pass) or die (mysql_error()); //conexao com banco e or die exibe mensagem de erro no banco//
mysql_select_db($banco) or die (mysql_error()); 
?>
<?php
session_start();


//comandos de consulta do mysql no php //
$id=$_POST['id'];
$nome=$_POST['nome'];
$curso=$_POST['curso'];

$sql = mysql_query("INSERT INTO curso(id_curso,nome_aluno,curso)
values('$id','$nome','$curso')");


header("Location:Contato.php");

session_destroy();
?>*/
?>