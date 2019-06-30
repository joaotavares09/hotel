<?php
include_once 'deletarProduto.class.php';
include_once '../model/produtoDAO.class.php';
include_once '../model/conexao.class';
$alocar = new deletarProduto();
$cad = new produtoDAO();
$con = new conexao();
$alocar->setIdproduto($_GET["idproduto"]);
$cad->deletar($con->conexao(), $alocar->getIdproduto());