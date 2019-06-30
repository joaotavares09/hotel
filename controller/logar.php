<?php
include_once '../model/conexao.class.php';
$con = new conexao();
include_once 'logar.class.php';
$alocar = new logar();
include_once '../model/logarDAO.class.php';
$logar = new logarDAO();
	
$alocar->setUsuario($_POST['usuario']);
$alocar->setSenha($_POST['senha']);

$result = $logar->logar($con->conexao(), $alocar->getUsuario(), $alocar->getSenha());

if($result){
	session_start();
	$qtd = $result->rowCount();
	echo $qtd;
	if($qtd==1){
		$row = $result->fetch(PDO::FETCH_OBJ);
		$_SESSION['idusuario']=$row->idusuario;
		$_SESSION['usuario']=$row->usuario;

		header('Location: ../view/index.php');
	}else{
		header('Location:../view/index_login.php');
	}
}
?>