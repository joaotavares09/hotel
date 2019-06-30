<?php
class logar{
	private $usuario;
	private $senha;

	function getUsuario(){
		return $this->usuario;
	}

	function getSenha(){
		return $this->senha;
	}

	function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	function setSenha($senha){
		$this->senha = $senha;
	}
}
?>