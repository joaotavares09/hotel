<?php
class logarDAO{
	public function logar($conexao, $usuario, $senha){
		$result = $conexao->query("SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'");
		return $result;
	}
}
?>