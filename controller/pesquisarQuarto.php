<?php
if (isset($_GET['pesq'])) {
    include_once '../model/conexao.class.php';
    $con = new conexao();
    include_once 'pesquisarQuarto.class.php';
    $coloc = new pesquisarQuarto();
    include_once '../model/quartoDAO.class.php';
    $pes = new quartoDAO();

    $coloc->setPesq($_GET['pesq']);

    $result = $pes->pesquisar($con->conexao(), $coloc->getPesq());

    if (isset($result)) {
        $res = '
            <table class="table table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Numero</th>
                <th scope="col">Status</th>
                <th scope="col">Descricao</th>
                <th scope="col">Opção</th>

            </tr>';
        sleep(1);
        //percorre os resultados via iteração
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            //exibe os resultados, acessando o objeto retornado
            $res .= '<tr>';
            $res .= '<td>' . $row->id_quarto . '</td>' .
                    '<td>' . $row->numero . ' </td> ' .
                    '<td>' . $row->status . ' </td> ' .
                    '<td>' . $row->descricao . ' </td> ';
                     $res.="<td>
                        <a href='../view/alterar_quarto.php?
                        id=$row->id_quarto&
                        numero=$row->numero&
                        status=$row->status&
                        descricao=$row->descricao                        
                        &' class='btn btn-danger'>Editar  </a>";

                        $res.="<a href='../controller/deletarQuarto.php?id=$row->id_quarto'
                         class='btn btn-primary'>Excluir </a>" .
                    '</td>';
            $res .= '</tr>';
        }
        echo $res . "</table>";
    }
}