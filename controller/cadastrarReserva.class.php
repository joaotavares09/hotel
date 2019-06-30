<?php
class cadastrarReserva {
        private $quarto;
        private $id_cliente_reserva;
        private $cpf1;
        private $cpf2;
        private $cpf3;
        private $cpf4;
        private $checkin;

        function getQuarto() {
            return $this->quarto;
        }

        function getIdClienteReserva() {
            return $this->id_cliente_reserva;
        }

        function getCpf1() {
            return $this->cpf1;
        }

        function getCpf2() {
            return $this->cpf2;
        }
        
        function getCpf3() {
            return $this->cpf3;
        }

        function getCpf4() {
            return $this->cpf4;
        }

        function getCheckin() {
            return $this->checkin;
        }
        
        
        
        function setQuarto($quarto) {
            $this->quarto = $quarto;
        }

        function setIdClienteReserva($id_cliente_reserva) {
            $this->id_cliente_reserva = $id_cliente_reserva;
        }

        function setCpf1($cpf1) {
            $this->cpf1 = $cpf1;
        }

        function setCpf2($cpf2) {
            $this->cpf2 = $cpf2;
        }

        function setCpf3($cpf3) {
            $this->cpf3 = $cpf3;
        }

        function setCpf4($cpf4) {
            $this->cpf4 = $cpf4;
        }

        function setCheckin($checkin) {
            $this->checkin = $checkin;
        }           
}