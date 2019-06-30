<?php
class quartoDAO {
	public function cadastrar($conexao, $numero, $status, $descricao) {
        
            $c=$conexao->exec("insert into quartos (numero, status, descricao) values ('{$numero}', '{$status}', '{$descricao}')");
            if($c){
                header("Location:../view/cadastrar_quarto.php?resposta=Cadastrado com sucesso&alerta=success");    
            }else{
                header("Location:../view/cadastrar_quarto.php?resposta=Erro ao cadastrar&alerta=danger");   
            }
        //     header("Location:../view/cadastrarQuarto.php?resposta=Cadastrado com sucesso&alerta=success");
        // } catch (Exception $exc) {
        //     header("Location:../view/cadastrarQuarto.php?resposta=Erro ao cadastrar&alerta=danger");
        // }
    }
    public function alterar($conexao, $id_quarto, $numero, $status, $descricao) {
        
            $c=$conexao->query("update quartos set numero='{$numero}', status='{$status}', descricao='{$descricao}' where id_quarto={$id_quarto}");
        //     header("Location:../view/listarQuarto.php?resposta=Alterado com sucesso&alerta=success");
        // } catch (Exception $query) {
        //     header("Location:../view/listarQuarto.php?resposta=Erro ao Alterar&alerta=danger");
        // }
            return $c;
    }
    public function deletar($conexao, $id_quarto) {
        
            $c=$conexao->query("delete from quartos where id_quarto={$id_quarto}");
        //     header("Location:../view/listarQuarto.php?resposta=Deletado com sucesso&alerta=success");
        // } catch (Exception $query) {
        //     header("Location:../view/listarQuarto.php?resposta=Erro ao Deletar&alerta=danger");
        // }
            if($c){
                header("Location:../view/listar_quartos.php?resposta=Deletado com sucesso&alerta=success");    
            }else{
                header("Location:../view/listar_quartos.php?resposta=Erro ao Deletar&alerta=danger");
            }
    }

    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM quartos WHERE numero like'%" . $pesq . "%' or status like'%" . $pesq . "%' or id_quarto like'%" . $pesq . "%'");
        return $result;
    }
}
?>