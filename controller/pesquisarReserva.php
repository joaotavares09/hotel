<?php
if (isset($_GET['pesq'])) {

    include_once '../model/conexao.class.php';
    $con = new conexao();
    include_once 'pesquisarReserva.class.php';
    $coloc = new pesquisarReserva();
    include_once '../model/reservaDAO.class.php';
    $pes = new reservaDAO();

    $coloc->setPesq($_GET['pesq']);

    $result = $pes->pesquisar($con->conexao(), $coloc->getPesq());

    if (isset($result)) {
        $res = '
            <table class="table table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID Cliente</th>
                <th scope="col">Quarto</th>
                <th scope="col">Cpf1</th>
                <th scope="col">Cpf2</th>
                <th scope="col"> Data Checkin</th>

            </tr>';
        sleep(1);
        //percorre os resultados via iteração
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            //exibe os resultados, acessando o objeto retornado
            $res .= '<tr>';
            $res .= '<td>' . $row->id_reserva . '</td>' .
                    '<td>' . $row->id_cliente_reserva . '</td>' .
                    '<td>' . $row->quarto . ' </td> ' .
                    '<td>' . $row->cpf1 . ' </td> ' .
                    '<td>' . $row->cpf2 . ' </td> ' .
                    '<td>' . $row->checkin . '</td>' ;
            $res .= '</tr>';
        }

        echo $res . "</table>";
    }
}
