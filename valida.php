<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
 
<body>
<?php 
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 

 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$senha	= $_POST ["senha"];	//atribuição do campo "senha" vindo do formulário para variavel
$repsenha	= $_POST ["repsenha"];	//atribuição do campo "repsenha" vindo do formulário para variavel

if $nome = "fulano" {
	echo "Processo finalizado com sucesso!";
}


</body>
</html>