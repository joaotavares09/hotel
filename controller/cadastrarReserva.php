<?php
include_once 'cadastrarReserva.class.php';
include_once '../model/reservaDAO.class.php';
include_once '../model/conexao.class.php';

$colocar = new cadastrarReserva();
$cad = new reservaDAO();
$con = new conexao();

$colocar->setQuarto($_POST["quarto"]);
$colocar->setIdClienteReserva($_POST["id_cliente_reserva"]);
$colocar->setCpf1($_POST["cpf1"]);
$colocar->setCpf2($_POST["cpf2"]);
$colocar->setCpf3($_POST["cpf3"]);
$colocar->setCpf4($_POST["cpf4"]);
$colocar->setCheckin($_POST["checkin"]);

$cad->cadastrar($con->conexao(), 
				$colocar->getQuarto(),
				$colocar->getIdClienteReserva(),
				$colocar->getCpf1(),
				$colocar->getCpf2(),
				$colocar->getCpf3(),
				$colocar->getCpf4(),
				$colocar->getCheckin());
?>