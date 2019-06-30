<?php
if (isset($_GET['pesq'])) {
    include_once '../model/conexao.class.php';
    $con = new conexao();
    include_once 'pesquisarCliente.class.php';
    $coloc = new pesquisarCliente();
    include_once '../model/clienteDAO.class.php';
    $pes = new clienteDAO();

    $coloc->setPesq($_GET['pesq']);

    $result = $pes->pesquisar($con->conexao(), $coloc->getPesq());

    if (isset($result)) {
        $res = '
            <table class="table table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Nome Pai</th>
                <th scope="col">Nome Mãe</th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">Sexo</th>
                <th scope="col">Email</th>               
                <th scope="col">Telefone1</th>
                <th scope="col">Telefone2</th>
                <th scope="col">Data Nasc</th>
                <th scope="col">Estado</th>
                <th scope="col">CEP</th>
                <th scope="col">Cidade</th>
                <th scope="col">Bairro</th>
                <th scope="col">Rua</th>
                <th scope="col">Numero</th>
                <th scope="col">Opção</th>

            </tr>';
        sleep(1);
        //percorre os resultados via iteração
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            //exibe os resultados, acessando o objeto retornado
            $res .= '<tr>';
            $res .= '<td>' . $row->idcliente . '</td>' .
                    '<td>' . $row->nome . ' </td> ' .
                    '<td>' . $row->nome_pai . ' </td> ' .
                    '<td>' . $row->nome_mae . ' </td> ' .
                    '<td>' . $row->cpf . '</td>' .
                    '<td>' . $row->rg . ' </td> ' .
                    '<td>' . $row->sexo . '</td>' .
                    '<td>' . $row->email . '</td>'.
                    '<td>' . $row->telefone1 . '</td>' .
                    '<td>' . $row->telefone2 . '</td>' .
                    '<td>' . $row->data_nasc . '</td>' .
                    '<td>' . $row->estado . ' </td> ' .
                    '<td>' . $row->cep . ' </td> ' .
                    '<td>' . $row->cidade . '</td>' .
                    '<td>' . $row->bairro . '</td>' .
                    '<td>' . $row->rua . '</td>' .
                    '<td>' . $row->numero . '</td>';
                    // '<td>' 
                    //     .'<a href=alterarCliente.php"?idcliente=$row->idcliente&nome=$row->nome&cpf=$row->cpf&'
                    //     . 'telefone1=$row->telefon1e&email=$row->email&salario=$row->salario>Alterar</a> '
                    //     . '<br> <a href="">Deletar</a>'. 
                    // '</td>'
                    $res.="<td>
                        <a href='../view/alterar_cliente.php?
                        id=$row->idcliente&
                        nome=$row->nome&
                        nome_pai=$row->nome_pai&
                        nome_mae=$row->nome_mae&
                        cpf=$row->cpf&
                        rg=$row->rg&
                        sexo=$row->sexo&
                        email=$row->email&
                        telefone1=$row->telefone1&
                        telefone2=$row->telefone2&
                        data_nasc=$row->data_nasc&
                        estado=$row->estado&
                        cep=$row->cep&
                        cidade=$row->cidade&
                        bairro=$row->bairro&
                        rua=$row->rua&
                        numero=$row->numero
                        &' class='btn btn-danger'>Editar  </a>";

                        $res.="<a href='../controller/deletarCliente.php?id=$row->idcliente'
                         class='btn btn-primary'>Excluir </a>" .
                    '</td>';
            $res .= '</tr>';
        }

        echo $res . "</table>";
    }
}
