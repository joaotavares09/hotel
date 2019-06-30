<?php
include_once 'cadastrarCliente.class.php';
$colocar = new cadastrarCliente();
include_once '../model/clienteDAO.class.php';
$cad = new clienteDAO();
include_once '../model/conexao.class.php';
$con = new conexao();

$colocar->setNome($_POST["nome"]);
$colocar->setNome_pai($_POST["nome_pai"]);
$colocar->setNome_mae($_POST["nome_mae"]);
$colocar->setCpf($_POST["cpf"]);
$colocar->setRg($_POST["rg"]);
$colocar->setSexo($_POST["sexo"]);
$colocar->setEmail($_POST["email"]);
$colocar->setTelefone1($_POST["telefone1"]);
$colocar->setTelefone2($_POST["telefone2"]);
$colocar->setData_nasc($_POST["data_nasc"]);
$colocar->setCidade($_POST["cidade"]);
$colocar->setEstado($_POST["estado"]);
$colocar->setCep($_POST["cep"]);
$colocar->setBairro($_POST["bairro"]);
$colocar->setRua($_POST["rua"]);
$colocar->setNumero($_POST["numero"]);

$cad->cadastrar($con->conexao(), 
				$colocar->getNome(),
				$colocar->getNome_pai(),
				$colocar->getNome_mae(),
				$colocar->getCpf(),
				$colocar->getRg(),
				$colocar->getSexo(),
				$colocar->getEmail(),
				$colocar->getTelefone1(),
				$colocar->getTelefone2(),
				$colocar->getData_nasc(),
				$colocar->getCidade(),
				$colocar->getEstado(),
				$colocar->getCep(),
				$colocar->getBairro(),
				$colocar->getRua(),
				$colocar->getNumero());
?>