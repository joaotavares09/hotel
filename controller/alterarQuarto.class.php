<?php
class alterarQuarto {

    private $id_quarto;
    private $numero;
    private $status;
    private $descricao;

    function getIdQuarto() {
        return $this->id_quarto;
    }

    function setIdQuarto($id_quarto) {
        $this->id_quarto = $id_quarto;
    }

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