<?php
class cadastrarFuncionario {
        private $nome;
        private $cpf;
        private $sexo;
        private $email;
        private $telefone1; 
        private $telefone2;
        private $data_nasc;
        private $cidade;
        private $bairro;
        private $rua;
        private $numero;
        private $data_contrato;
        private $cargo;
        private $salario;

        function getNome() {
            return $this->nome;
        }
        
        function getCpf() {
            return $this->cpf;
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

        function getData_contrato() {
            return $this->data_contrato;
        }

        function getCargo() {
            return $this->cargo;
        }

        function getSalario() {
            return $this->salario;
        }
        
        function setNome($nome) {
            $this->nome = $nome;
        }
        
        function setCpf($cpf) {
            $this->cpf = $cpf;
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

        function setCargo($cargo) {
            $this->cargo = $cargo;
        }
        
        function setSalario($salario) {
            $this->salario = $salario;
        } 
}
?>