<?php
class conexao {
    public function conexao() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    try {
        //instancia objeto PDO, conectando no MySQL
        $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // apresenta o erro PDO 
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexao realizada com sucesso!"; 
        return $conexao;
    } catch (PDOException $e) {
        echo "Conexao falhou: " . $e->getMessage();
        return $conexao;
    }
}
}
