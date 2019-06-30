<?php
class cadastrarQuarto {
	private $numero;
	private $status;
	private $descricao;

	function getNumero() {
		return $this->numero;
	}

	function getStatus() {
		return $this->status;
	}

	function getDescricao() {
		return $this->descricao;
	}

	function setNumero($numero) {
        $this->numero = $numero;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}
?>