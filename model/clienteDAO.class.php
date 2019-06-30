<?php
class clienteDAO {
    public function cadastrar($conexao, $nome, $nome_pai, $nome_mae, $cpf, $rg, $sexo, $email, $telefone1, $telefone2, $data_nasc, $estado, $cep, $cidade, $bairro, $rua, $numero) {
            $c=$conexao->exec("INSERT INTO cliente (nome, nome_pai, nome_mae, cpf, rg, sexo, email, telefone1, telefone2, data_nasc, estado, cep, cidade, bairro, rua, numero) values ('{$nome}', '{$nome_pai}', '{$nome_mae}', '{$cpf}', '{$rg}', '{$sexo}', '{$email}', '{$telefone1}', '{$telefone2}', '{$data_nasc}', '{$estado}', '{$cep}', '{$cidade}', '{$bairro}', '{$rua}', '{$numero}')");
            if($c){
                header("Location:../view/cadastrar_cliente.php?resposta=Cadastrado com sucesso&alerta=success");    
            }else{
                header("Location:../view/cadastrar_cliente.php?resposta=Erro ao cadastrar&alerta=danger");   
            }
    }

    public function alterar($conexao, $idcliente, $nome, $nome_pai, $nome_mae, $cpf, $rg, $sexo, $email, $telefone1, $telefone2, $data_nasc, $estado, $cep, $cidade, $bairro, $rua, $numero) {
            $c=$conexao->query("update cliente set nome='{$nome}', nome_pai='{$nome_pai}', nome_mae='{$nome_mae}', cpf='{$cpf}', rg='{$rg}', sexo='{$sexo}', email='{$email}', telefone1='{$telefone1}', telefone2='{$telefone2}', data_nasc='{$data_nasc}', estado='{$estado}',  cep='{$cep}', cidade='{$cidade}',  bairro='{$bairro}',  rua='{$rua}',  numero='{$numero}' where idcliente={$idcliente}");
            // if($c){
            //     header("Location:../view/listar_cliente.php?resposta=Alterado com sucesso&alerta=success");    
            // }else{
            //     header("Location:../view/listar_cliente.php?resposta=Erro ao Alterar&alerta=danger");   
            // }
            return $c;
    }

    public function deletar($conexao, $idcliente) {
        
            $c=$conexao->query("DELETE FROM cliente where idcliente={$idcliente}");
            if($c){
                header("Location:../view/listar_clientes.php?resposta=Deletado com sucesso&alerta=success");    
            }else{
                header("Location:../view/listar_clientes.php?resposta=Erro ao Deletar&alerta=danger");
            }
        //     header("Location:../view/listar_cliente.php?resposta=Deletado com sucesso&alerta=success");
        // } catch (Exception $query) {
        //     header("Location:../view/listar_cliente.php?resposta=Erro ao Deletar&alerta=danger");
        // }
    }

    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM cliente WHERE nome like'%" . $pesq . "%' or cpf like'%" . $pesq . "%' or idcliente like'%" . $pesq . "%'");
        return $result;
    }
}
?>