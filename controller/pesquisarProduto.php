<?php

if (isset($_GET['pesq'])) {

    include_once '../model/conexao.class';
    $con = new conexao();

    include_once 'pesquisarProduto.class.php';
    $aloca = new pesquisarProduto();

    include_once '../model/produtoDAO.class.php';
    $pes = new produtoDAO();

    $aloca->setPesq($_GET['pesq']);
 
    $result = $pes->pesquisar($con->conexao(), $aloca->getPesq());
    
    if (isset($result)) {
        $res = "
            <table class='table table'>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Nome</th>
                <th scope='col'>valor</th>
                <th scope='col'>estoque</th>
                <th scope='col'>descricao</th>
                <th scope='col'>Funcões</th>

            </tr>";
        sleep(1);
        //percorre os resultados via iteração
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            //exibe os resultados, acessando o objeto retornado
            $res .= "<tr>";
            $res .= "<td>" . $row->idproduto . "</td>" .
                    "<td>" . $row->nome . " </td> " .
                    "<td>" . $row->valor . "</td>".
                    "<td>" . $row->estoque . "</td>".
                    "<td>" . $row->descricao . "</td>".
                    "<td>" ."<a href='alterarProduto.php?idproduto=$row->idproduto&nome=$row->nome"
                    . "&valor=$row->valor&estoque=$row->estoque&descricao=$row->descricao' >Alterar</a>"
                    . " <br><a href='../controller/deletarProduto.php?idProduto=$row->idProduto'> Deletar </a>". "</td>";


            $res .= "</tr>";
        }

        echo $res . "</table>";
    }
}


