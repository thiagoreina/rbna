﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style type="text/css">
<!--
.verdana {
	font-family: Verdana, Geneva, sans-serif;
	font-weight: bold;
	color: #666;
	position: relative;
	text-align: center;
}
-->
</style></head>

<body bgcolor="#EEEEEE" class="verdana">
<?php 
include_once '../validar.php';
include_once '../validar_rh.php';
?>
<?php
$nome = 		$_POST["nome"];
$setor = 		$_POST["setor"];
$matricula = 	$_POST["matricula"];
$admissao = 	$_POST["admissao"];
$data_nasc = 	$_POST["data_nasc"];
$email = 		$_POST["email"];
$ramal = 		$_POST["ramal"];
$celular = 		$_POST["celular"];
$id = 			$_POST["id"];

//tratamento da data para ser gravada no banco
	$data = explode("/",$data_nasc);
	
	$dia = $data[0];
	$mes = $data[1];
	$ano = $data[2];
	$databd = $ano."-".$mes."-".$dia;


//data admissao
	$dataadm = explode("/",$admissao);
	
	$diaadm = $dataadm[0];
	$mesadm = $dataadm[1];
	$anoadm = $dataadm[2];
	$dataadm = $anoadm."-".$mesadm."-".$diaadm;

    
include_once '../fontes/conexao.php';


$sql2 = "UPDATE funcionario SET id_setor = ".$setor.",
nome = '".$nome."',
admissao = '".$dataadm."',
matricula = '".$matricula."',
data_nasc = '".$databd."',
email = '".$email."',
ramal = '".$ramal."',
celular = '".$celular."' WHERE id_funcionario =".$id;


			if(mysql_query($sql2, $con)){
				print "<script type='text/javascript'>";
print "alert('Funcionário Atualizado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
			}else{
				 echo "Erro ao Salvar.";
				 }
	
	mysql_close($con);
	 


?>
</body>
</html>