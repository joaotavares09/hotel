<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--================Menu index_gerenc.php =================-->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index_gerenc.php">Início</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="cadastrar_cliente.php">Cadastrar Cliente</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cadastrar_funcionario.php">Cadastrar Funcionarios</a></li>
                                    <li class="nav-item"><a class="nav-link" href="
                                    cadastrar_quarto.php">Cadastrar Quartos</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="
                                cadastrar_reserva.php">Fazer Reservas</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisas</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="
                                    listar_reservas.php">Listar Reservas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="
                                    listar_clientes.php">Listar Clientes</a></li>
                                    <li class="nav-item"><a class="nav-link" href="listar_funcionarios.php">Listar Funcionarios</a></li>
                                    <li class="nav-item"><a class="nav-link" href="
                                    listar_quartos.php">Listar Quartos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../controller/logout.php">Sair</a></li>
                        </ul>
                    </div>
                    <!--================Menu index_gerenc.php =================-->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
<br>
<!--================Corpo =================-->
<div class="container" style="margin-top: 5%;">

  <?php
    if (isset($_GET['resposta'])) {
    $resposta=$_GET['resposta'];
    $alerta=$_GET['alerta'];

    echo "<div class='alert alert-$alerta' role='alert'>
     $resposta
   </div>";
  }
?>

<form method="post" action="../controller/alterarCliente.php">
  <br>   
  <label><b>Alterar dados do Cliente</b></label><br>
  <div class="form-group">
    <input name="idcliente" type="hidden"  value="<?php echo $_GET['id'] ?>">
  </div>
  <div class="form-group">
      <label><b>Nome:</b></label>
        <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" 
        value="<?php echo $_GET["nome"]?>" required>
  </div>

  <div class="form-group">
    <label><b>Nome Do Pai:</b></label>
      <input name="nome_pai" type="text" class="form-control" id="exampleFormControlInput1" 
      value="<?php echo $_GET['nome_pai']?>" required>
  </div>

  <div class="form-group">
    <label><b>Nome Da Mãe:</b></label>
    <input name="nome_mae" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['nome_mae']?>" required>
  </div>

  <div class="form-group">
    <label><b>CPF:</b></label>
    <input name="cpf" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['cpf']?>" required>
  </div>

  <div class="form-group">
    <label><b>RG:</b></label>
    <input name="rg" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['rg']?>" required>
  </div>

  <div class="form-group">  
    <div class="checkbox">
      <label><b>Sexo:</b></label>
      <label>
        <input type="radio"  name='sexo' value="Masculino" checked> Masculino 
        <input type="radio" name='sexo' value="Feminino" > Feminino
      </label>    
    </div>

    <div class="form-group">
      <label><b>Endereço de email:</b></label>
      <input name="email" type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $_GET['email']?>">
    </div>

    <div class="form-group">
      <label><b>Telefone1:</b></label>
      <input name="telefone1" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['telefone1']?>">
    </div>

    <div class="form-group">
      <label><b>Telefone2:</b></label>
      <input name="telefone2" type="text" class="form-control" id="exampleFormControlInput1"  
      value="<?php echo $_GET['telefone2']?>">
    </div> 

    <div class="form-group">
      <label><b>Data Nascimento:</b></label>
      <input  name="data_nasc" class="form-control" type="date" id="exampleFormControlInput1"  value="<?php echo $_GET['data_nasc']?>" required>
    </div>

    <div class="form-group">
      <label><b>Estado:</b></label>
      <input name="estado" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['estado']?>" required>
    </div>

    <div class="form-group">
      <label><b>CEP:</b></label>
      <input name="cep" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['cep']?>" required>
    </div>

    <div class="form-group">
      <label><b>Cidade:</b></label>
      <input name="cidade" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['cidade']?>" required>
    </div>

    <div class="form-group">
      <label><b>Bairro:</b></label>
      <input name="bairro" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['bairro']?>" required>
    </div>

    <div class="form-group">
      <label><b>Rua:</b></label>
      <input name="rua" type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_GET['rua']?>" required>
    </div>

    <div class="form-group">
      <label><b>Numero:</b></label>
      <input name="numero" type="text" class="form-control" id="textNome"  
      value="<?php echo $_GET['numero']?>" required>
    </div>

    <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10%">Atualizar</button>
  </form>
</div>
<div style="margin-bottom: 15%;"></div>
<!--================Corpo =================-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="js/custom.js"></script>