<?php
class cadastrarProduto {
   
        private $nome;
        private $descricao;
        private $valor;
        private $estoque;

        function getNome() {
        return $this->nome;
        }

        function getDescricao() {
        return $this->descricao;
        }

        function getValor() {
        return $this->valor;
        }

        function getEstoque() {
        return $this->estoque;
        }

        function setNome($nome) {
        $this->nome = $nome;
        }

        function setDescricao($descricao) {
        $this->descricao = $descricao;
        }

        function setValor($valor) {
        $this->valor = $valor;
        }

        function setEstoque($estoque) {
        $this->estoque = $estoque;
        }
}