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
            
            <form method="post" action="../controller/cadastrarReserva.php">
            <br>   
            <label><b>Cadastro de Cliente</b></label><br>
              <div class="form-group">
                <label><b>Quarto:</b></label>
                <input name="quarto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="0000" required>
              </div>

              <div class="form-group">
                <label><b>Cliente:</b></label>
                <input name="id_cliente_reserva" type="text" class="form-control" id="exampleFormControlInput1" placeholder="000.000.000-00" required>
              </div>

              <div class="form-group">
                <label><b>Cpf1:</b></label>
                <input name="cpf1" type="text" class="form-control" id="exampleFormControlInput1" placeholder="000.000.000-00" required>
              </div>

              <div class="form-group">
                <label><b>Cpf2:</b></label>
                <input name="cpf2" type="text" class="form-control" id="exampleFormControlInput1" placeholder="000.000.000-00" required>
              </div>

              <div class="form-group">
                <label><b>Check-in:</b></label>
                <input name="checkin" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
              
              <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 10%">Cadastrar</button>
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