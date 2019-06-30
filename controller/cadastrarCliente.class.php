<?php
class cadastrarCliente {
        private $nome;
        private $nome_pai;
        private $nome_mae;
        private $cpf;
        private $rg;
        private $sexo;
        private $email;
        private $telefone1; 
        private $telefone2;
        private $data_nasc;
        private $estado;
        private $cep;
        private $cidade;
        private $bairro;
        private $rua;
        private $numero;


        function getNome() {
            return $this->nome;
        }

        function getNome_pai() {
            return $this->nome_pai;
        }

        function getNome_mae() {
            return $this->nome_mae;
        }
        
        function getCpf() {
            return $this->cpf;
        }

        function getRg() {
            return $this->rg;
        }

        function getSexo() {
            return $this->sexo;
        }
        
        function getEmail() {
            return $this->email;
        }

        function getTelefone1() {
            return $this->telefone1;
        }

        function getTelefone2() {
            return $this->telefone2;
        }

        function getData_nasc() {
            return $this->data_nasc;
        }

        function getEstado() {
            return $this->estado;
        }

        function getCep() {
            return $this->cep;
        }

        function getCidade() {
            return $this->cidade;
        }

        function getBairro() {
            return $this->bairro;
        }

        function getRua() {
            return $this->rua;
        }

        function getNumero() {
            return $this->numero;
        }

        function getData_contraro() {
            return $this->data_contrato;
        }

        function getSalario() {
            return $this->salario;
        }
        
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNome_pai($nome_pai) {
            $this->nome_pai = $nome_pai;
        }

        function setNome_mae($nome_mae) {
            $this->nome_mae = $nome_mae;
        }
        
        function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        function setRg($rg) {
            $this->rg = $rg;
        }

        function setSexo($sexo) {
            $this->sexo = $sexo;
        }
        
        function setEmail($email) {
            $this->email = $email;
        }

        function setTelefone1($telefone1) {
            $this->telefone1 = $telefone1;
        }
        
        function setTelefone2($telefone2) {
            $this->telefone2 = $telefone2;
        }

        function setData_nasc($data_nasc) {
            $this->data_nasc = $data_nasc;
        }

        function setEstado($estado) {
            $this->estado = $estado;
        }

        function setCep($cep) {
            $this->cep = $cep;
        }

        function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        function setBairro($bairro) {
            $this->bairro = $bairro;
        }

        function setRua($rua) {
            $this->rua = $rua;
        }

        function setNumero($numero) {
            $this->numero = $numero;
        }

        function setData_contrato($data_contrato) {
            $this->data_contrato = $data_contrato;
        }
        
        function setSalario($salario) {
            $this->salario = $salario;
        }   
}