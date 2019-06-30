function CriaRequest() {
    try {
        request = new XMLHttpRequest();
    } catch (IEAtual) {

        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (IEAntigo) {

            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (falha) {
                request = false;
            }
        }
    }

    if (!request)
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}

/**
 * Função para enviar os dados
 */
function pesquisar_produto(pesq) {
    // Declaração de Variáveis
    //var nome   = document.getElementById("txtnome").value;
    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = "<><img src='../view/img/carregando.gif'>";

    // Iniciar uma requisição
    xmlreq.open("GET", "../controller/pesquisarProduto.php?pesq=" + pesq, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
    xmlreq.onreadystatechange = function () {

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {

            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            } else {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}

function pesquisar_funcionario(pesq) {
    // Declaração de Variáveis
    //var nome   = document.getElementById("txtnome").value;
    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = "<img src='../view/img/carregando.gif'>";

    // Iniciar uma requisição
    xmlreq.open("GET", "../controller/pesquisarFuncionario.php?pesq=" + pesq, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
    xmlreq.onreadystatechange = function () {

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {

            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            } else {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}

function pesquisar_cliente(pesq) {
    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();
    result.innerHTML = "<img src='../view/img/carregando.gif'>";
    xmlreq.open("GET", "../controller/pesquisarCliente.php?pesq=" + pesq, true);
    xmlreq.onreadystatechange = function () {
        if (xmlreq.readyState == 4) {
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            } else {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}

function pesquisar_quarto(pesq) {
    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();
    result.innerHTML = "<img src='../view/img/carregando.gif'>";
    xmlreq.open("GET", "../controller/pesquisarQuarto.php?pesq=" + pesq, true);
    xmlreq.onreadystatechange = function () {
        if (xmlreq.readyState == 4) {
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            } else {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}

function pesquisar_reserva(pesq) {
    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();
    result.innerHTML = "<img src='../view/img/carregando.gif'>";
    xmlreq.open("GET", "../controller/pesquisarReserva.php?pesq=" + pesq, true);
    xmlreq.onreadystatechange = function () {
        if (xmlreq.readyState == 4) {
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            } else {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}
 