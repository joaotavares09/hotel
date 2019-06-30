<?php
class funcionarioDAO {
    public function cadastrar($conexao, $nome, $cpf, $sexo, $email, $telefone1, $telefone2, $data_nasc, 
        $cidade, $bairro, $rua, $numero, $data_contrato, $cargo, $salario) {
            $c=$conexao->exec("insert into Funcionario(nome, cpf, sexo, email, telefone1, telefone2, data_nasc, cidade, bairro, rua, numero, data_contrato, cargo, salario) values ('{$nome}', '{$cpf}', '{$sexo}', '{$email}', '{$telefone1}', '{$telefone2}', '{$data_nasc}', '{$cidade}', '{$bairro}', '{$rua}', '{$numero}', '{$data_contrato}', '{$cargo}', '{$salario}')");
            // header("Location:../view/cadastrarFuncionario.php?resposta=Cadastrado com sucesso&alerta=success");
            if($c){
                header("Location:../view/cadastrar_funcionario.php?resposta=Cadastrado com sucesso&alerta=success");
            }else{
                header("Location:../view/cadastrar_funcionario.php?resposta=Erro ao cadastrar&alerta=danger");   
            }
    }

    public function alterar($conexao, $id_funcionario, $nome, $cpf, $sexo, $email, $telefone1, $telefone2, $data_nasc, $cidade, $bairro, $rua, $numero, $data_contrato, $cargo, $salario) {
            $c=$conexao->query("update funcionario set 
                nome='{$nome}', 
                cpf='{$cpf}',
                sexo='{$sexo}', 
                email='{$email}',
                telefone1='{$telefone1}',
                telefone2='{$telefone2}',
                data_nasc='{$data_nasc}',
                cidade='{$cidade}',
                bairro='{$bairro}', 
                rua='{$rua}',
                numero='{$numero}',
                data_contrato='{$data_contrato}',
                cargo='{$cargo}',
                salario='{$salario}'                 
                where id_funcionario={$id_funcionario}");
        //     header("Location:../view/listarFuncionario.php?resposta=Alterado com sucesso&alerta=success");
        // } catch (Exception $query) {
        //     header("Location:../view/listarFuncionario.php?resposta=Erro ao Alterar&alerta=danger");
        // }
            return $c;
    }

    public function deletar($conexao, $id_funcionario) {

            $c=$conexao->query("DELETE FROM funcionario where id_funcionario={$id_funcionario}");
            if($c){
                header("Location:../view/listar_funcionarios.php?resposta=Deletado com sucesso&alerta=success");    
            }else{
                header("Location:../view/listar_funcionarios.php?resposta=Erro ao Deletar&alerta=danger");
            }
        //     header("Location:../view/listarFuncionario.php?resposta=Deletado com sucesso&alerta=success");
        // } catch (Exception $query) {
        //     header("Location:../view/listarFuncionario.php?resposta=Erro ao Deletar&alerta=danger");
        // }

    }

    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM funcionario WHERE nome like'%" . $pesq . "%' or cpf like'%" . $pesq . "%' or salario like'%" . $pesq . "%' or id_funcionario like'%" . $pesq . "%'");
        return $result;
    }

}
?>