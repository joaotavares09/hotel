<?php
class reservaDAO {
    public function cadastrar($conexao, $quarto, $id_cliente_reserva, $cpf1, $cpf2, $cpf3, $cpf4, $checkin) {
            $c=$conexao->exec("INSERT INTO reserva (quarto, id_cliente_reserva, cpf1, cpf2, cpf3, cpf4, checkin) values ('{$quarto}', '{$id_cliente_reserva}', '{$cpf1}', '{$cpf2}', '{$cpf3}', '{$cpf4}', '{$checkin}')");
            if($c){
                header("Location:../view/cadastrar_reserva.php?resposta=Cadastrado com sucesso&alerta=success");    
            }else{
                header("Location:../view/cadastrar_reserva.php?resposta=Erro ao cadastrar&alerta=danger");
            }
    }

    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM reserva WHERE quarto like'%" . $pesq . "%' or cpf1 like'%" . $pesq . "%' or id_reserva like'%" . $pesq . "%'");
        return $result;
    }
}
?>