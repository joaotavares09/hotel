<?php

include_once 'alterarProduto.class.php';
include_once '../model/produtoDAO.class.php';
include_once '../model/conexao.class';
$alocar = new alterarProduto();
$alterar = new produtoDAO();
$con = new conexao();

$alocar->setIdproduto($_POST["idproduto"]);
$alocar->setNome($_POST["nome"]);
$alocar->setDescricao($_POST["descricao"]);
$alocar->setValor($_POST["valor"]);
$alocar->setEstoque($_POST["estoque"]);

$alterar->alterar($con->conexao(),$alocar->getIdproduto(), 
								  $alocar->getNome(), 
								  $alocar->getDescriao(), 
								  $alocar->getValor(), 
								  $alocar->getEstoque());


