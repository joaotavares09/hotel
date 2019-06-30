<?php
include_once 'alterarCliente.class.php';
include_once '../model/clienteDAO.class.php';
include_once '../model/conexao.class.php';

$colocar = new alterarCliente();
$cad = new clienteDAO();
$con = new conexao();

$colocar->setIdCliente($_POST["idcliente"]);
$colocar->setNome($_POST["nome"]);
$colocar->setNome_pai($_POST["nome_pai"]);
$colocar->setNome_pai($_POST["nome_mae"]);
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

$result=$cad->alterar($con->conexao(), 
				$colocar->getIdCliente(),
				$colocar->getNome(),
				$colocar->getNome_pai(),
				$colocar->getNome_pai(),
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
if ($result) {
	header("Location: ../view/listar_clientes.php?resposta=Alterado com sucesso!&alerta=sucess");
}else{
	header("Location: ../view/listar_clientes.php?resposta=Erro!&alerta=sucess");
}
?>