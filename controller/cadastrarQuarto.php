<?php
include_once 'cadastrarQuarto.class.php';
include_once '../model/quartoDAO.class.php';
include_once '../model/conexao.class.php';

$colocar = new cadastrarQuarto();
$cad = new quartoDAO();
$con = new conexao();

$colocar->setNumero($_POST["numero"]);
$colocar->setStatus($_POST["status"]);
$colocar->setDescricao($_POST["descricao"]);

$cad->cadastrar($con->conexao(), 
				$colocar->getNumero(),
				$colocar->getStatus(),
				$colocar->getDescricao());
?>