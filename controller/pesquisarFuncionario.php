<?php
if (isset($_GET['pesq'])) {
    include_once '../model/conexao.class.php';
    $con = new conexao();
    include_once 'pesquisarFuncionario.class.php';
    $aloca = new pesquisarFuncionario();
    include_once '../model/funcionarioDAO.class.php';
    $pes = new funcionarioDAO();

    $aloca->setPesq($_GET['pesq']);

    $result = $pes->pesquisar($con->conexao(), $aloca->getPesq());

    if (isset($result)) {
        $res = '
            <table class="table table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Sexo</th>
                <th scope="col">Email</th>               
                <th scope="col">Telefone1</th>
                <th scope="col">Telefone2</th>
                <th scope="col">Data Nasc</th>
                <th scope="col">Cidade</th>
                <th scope="col">Bairro</th>
                <th scope="col">Rua</th>
                <th scope="col">Numero</th>
                <th scope="col">Data Contrato</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salario</th>
                <th scope="col">Funcões</th>

            </tr>';
        sleep(1);
        //percorre os resultados via iteração
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            //exibe os resultados, acessando o objeto retornado
            $res .= '<tr>';
            $res .= '<td>' . $row->id_funcionario . '</td>' .
                    '<td>' . $row->nome . ' </td> ' .
                    '<td>' . $row->cpf . '</td>' .
                    '<td>' . $row->sexo . '</td>' .
                    '<td>' . $row->email . '</td>'.
                    '<td>' . $row->telefone1 . '</td>' .
                    '<td>' . $row->telefone2 . '</td>' .
                    '<td>' . $row->data_nasc . '</td>' .
                    '<td>' . $row->cidade . '</td>' .
                    '<td>' . $row->bairro . '</td>' .
                    '<td>' . $row->rua . '</td>' .
                    '<td>' . $row->numero . '</td>' .
                    '<td>' . $row->data_contrato . '</td>' .
                    '<td>' . $row->cargo . '</td>' .
                    '<td>' . $row->salario . '</td>';
                     $res.="<td>
                        <a href='../view/alterar_funcionario.php?
                        id=$row->id_funcionario&
                        nome=$row->nome&
                        cpf=$row->cpf&
                        sexo=$row->sexo&
                        email=$row->email&
                        telefone1=$row->telefone1&
                        telefone2=$row->telefone2&
                        data_nasc=$row->data_nasc&
                        cidade=$row->cidade&
                        bairro=$row->bairro&
                        rua=$row->rua&
                        numero=$row->numero&
                        data_contrato=$row->data_contrato&
                        cargo=$row->cargo&
                        salario=$row->salario
                        &' class='btn btn-danger'>Editar  </a>";

                        $res.="<a href='../controller/deletarFuncionario.php?id=$row->id_funcionario'
                         class='btn btn-primary'>Excluir </a>" .
                    '</td>';
            $res .= '</tr>';
        }

        echo $res . "</table>";
    }
}
