<?php
class produtoDAO {

    public function cadastrar($conexao, $nome, $descricao, $valor, $estoque) {
        try {
            $conexao->exec("insert into produto (nome,descricao,valor,estoque) values ('$nome','$descricao',$valor,$estoque)");
            header("Location:../view/cadastrarProduto.php?resposta=Cadastrado com sucesso&alerta=success");
        } catch (Exception $exc) {
            header("Location:../view/cadastrarProduto.php?resposta=Erro ao cadastrar&alerta=danger");
        }
    }

    public function alterar($conexao, $idproduto, $nome, $descricao, $valor, $estoque) {
        try {
            $conexao->query("update produto set nome='{$nome}', 
                                                descricao='{$descricao}', 
                                                valor={$valor}, 
                                                estoque={$estoque} 
                                                where idProduto={$idproduto}");
            header("Location:../view/listarProduto.php?resposta=Alterado com sucesso&alerta=success");
        } catch (Exception $query) {
            header("Location:../view/listarProduto.php?resposta=Erro ao Alterar&alerta=danger");
        }
    }

    public function deletar($conexao, $idproduto) {
        try {
            $conexao->query("delete from produto where idProduto={$idproduto}");
            header("Location:../view/listarProduto.php?resposta=Deletado com sucesso&alerta=success");
        } catch (Exception $query) {
            header("Location:../view/listarProduto.php?resposta=Erro ao Deletar&alerta=danger");
        }
    }

    public function pesquisar($conexao, $pesq) {
        $result = $conexao->query("SELECT * FROM produto WHERE nome like'%" . $pesq . "%' or idProduto like'%" . $pesq . "%'or valor like'%" . $pesq . "%'");
        return $result;
    }
}