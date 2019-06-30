<?php

include_once 'cadastrarProduto.class.php';
include_once '../model/produtoDAO.class.php';
include_once '../model/conexao.class';
$coloc = new cadastrarProduto();
$cad = new produtoDAO();
$con = new conexao();


$coloc->setNome($_POST["nome"]);
$coloc->setdescricao($_POST["descricao"]);
$coloc->setValor($_POST["valor"]);
$coloc->setEstoque($_POST["estoque"]);

$cad->cadastrar($con->conexao(), 
				$coloc->getNome(), 
				$coloc->getDescricao(), 
				$coloc->getValor(), 
				$coloc->getEstoque());




