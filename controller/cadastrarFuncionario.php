<?php
include_once 'cadastrarFuncionario.class.php';
include_once '../model/funcionarioDAO.class.php';
include_once '../model/conexao.class.php';

$colocar = new cadastrarFuncionario();
$cad = new funcionarioDAO();
$con = new conexao();

$colocar->setNome($_POST["nome"]);
$colocar->setCpf($_POST["cpf"]);
$colocar->setSexo($_POST["sexo"]);
$colocar->setEmail($_POST["email"]);
$colocar->setTelefone1($_POST["telefone1"]);
$colocar->setTelefone2($_POST["telefone2"]);
$colocar->setData_nasc($_POST["data_nasc"]);
$colocar->setCidade($_POST["cidade"]);
$colocar->setBairro($_POST["bairro"]);
$colocar->setRua($_POST["rua"]);
$colocar->setNumero($_POST["numero"]);
$colocar->setData_contrato($_POST["data_contrato"]);
$colocar->setCargo($_POST["cargo"]);
$colocar->setSalario($_POST["salario"]);

$cad->cadastrar($con->conexao(), 
				$colocar->getNome(),
				$colocar->getCpf(),
				$colocar->getSexo(),
				$colocar->getEmail(),
				$colocar->getTelefone1(),
				$colocar->getTelefone2(),
				$colocar->getData_nasc(),
				$colocar->getCidade(),
				$colocar->getBairro(),
				$colocar->getRua(),
				$colocar->getNumero(),
				$colocar->getData_contrato(),
				$colocar->getCargo(),
				$colocar->getSalario());
?>