<?php
include_once 'alterarFuncionario.class.php';
include_once '../model/funcionarioDAO.class.php';
include_once '../model/conexao.class.php';

$alocar = new alterarFuncionario();
$alterar = new funcionarioDAO();
$con = new conexao();

$alocar->setIdFuncionario($_POST["id_funcionario"]);
$alocar->setNome($_POST["nome"]);
$alocar->setCpf($_POST["cpf"]);
$alocar->setSexo($_POST["sexo"]);
$alocar->setEmail($_POST["email"]);
$alocar->setTelefone1($_POST["telefone1"]);
$alocar->setTelefone2($_POST["telefone2"]);
$alocar->setData_nasc($_POST["data_nasc"]);
$alocar->setCidade($_POST["cidade"]);
$alocar->setBairro($_POST["bairro"]);
$alocar->setRua($_POST["rua"]);
$alocar->setNumero($_POST["numero"]);
$alocar->setData_contrato($_POST["data_contrato"]);
$alocar->setCargo($_POST["cargo"]);
$alocar->setSalario($_POST["salario"]);


$result=$alterar->alterar($con->conexao(), 
				$alocar->getIdFuncionario(), 
				$alocar->getNome(),
				$alocar->getCpf(),
				$alocar->getSexo(),
				$alocar->getEmail(),
				$alocar->getTelefone1(),
				$alocar->getTelefone2(),
				$alocar->getData_nasc(),
				$alocar->getCidade(),
				$alocar->getBairro(),
				$alocar->getRua(),
				$alocar->getNumero(),
				$alocar->getData_contrato(),
				$alocar->getCargo(),
				$alocar->getSalario());
if ($result) {
	header("Location: ../view/listar_funcionarios.php?resposta=Alterado com sucesso!&alerta=sucess");
}else{
	header("Location: ../view/listar_funcionarios.php?resposta=Erro!&alerta=sucess");
}
?>