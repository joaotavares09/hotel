<?php
include_once 'deletarQuarto.class.php';
include_once '../model/quartoDAO.class.php';
include_once '../model/conexao.class.php';
$coloc = new deletarQuarto();
$top = new quartoDAO();
$con = new conexao();

$coloc->setIdQuarto($_GET["id"]);
$top->deletar($con->conexao(), $coloc->getIdQuarto());