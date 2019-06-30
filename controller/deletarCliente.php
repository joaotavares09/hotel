<?php
include_once 'deletarCliente.class.php';
include_once '../model/clienteDAO.class.php';
include_once '../model/conexao.class.php';
$coloc = new deletarCliente();
$cad = new clienteDAO();
$con = new conexao();
$coloc->setIdcliente($_GET["id"]);
$cad->deletar($con->conexao(), $coloc->getIdcliente());
?>