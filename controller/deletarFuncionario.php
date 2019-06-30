<?php
include_once 'deletarFuncionario.class.php';
include_once '../model/funcionarioDAO.class.php';
include_once '../model/conexao.class.php';
$coloc = new deletarFuncionario();
$cad = new funcionarioDAO();
$con = new conexao();
$coloc->setIdfuncionario($_GET["id"]);
$cad->deletar($con->conexao(), $coloc->getIdfuncionario());
?>