<?php
include_once 'alterarQuarto.class.php';
include_once '../model/quartoDAO.class.php';
include_once '../model/conexao.class.php';

$colocar = new alterarQuarto();
$cad = new quartoDAO();
$con = new conexao();

$colocar->setIdQuarto($_POST["id_quarto"]);
$colocar->setNumero($_POST["numero"]);
$colocar->setStatus($_POST["status"]);
$colocar->setDescricao($_POST["descricao"]);

$result=$cad->alterar($con->conexao(), 
				$colocar->getIdQuarto(),
				$colocar->getNumero(),
				$colocar->getStatus(),
				$colocar->getDescricao());
if ($result) {
	header("Location: ../view/listar_quartos.php?resposta=Alterado com sucesso!&alerta=sucess");
}else{
	header("Location: ../view/listar_quartos.php?resposta=Erro!&alerta=sucess");
}
?>