<?php

require('../controlle/controla_sessao.php');
include('Erros_class.php');
$erro = new ErosLn();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-mateus.ico">
    <title>Auditoria Wms - Grupo Mateus </title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
     data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <a href="index.html" class="logo">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo"/>
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo"/>
                            <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage"/>
                            </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                   data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-magnify font-20 mr-1"></i>
                                <div class="ml-1 d-none d-sm-block">
                                    <span>Search</span>
                                </div>
                            </div>
                        </a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter">
                            <a class="srh-btn">
                                <i class="ti-close"></i>
                            </a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../assets/images/users/supervisor.jpg" alt="user" class="rounded-circle"
                                    width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="../nice-html/ltr/pages-profile.php"><i
                                        class="ti-user m-r-5 m-l-5"></i> Meu Perfil</a>
                            <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a> -->
                            <a class="dropdown-item" href="../controlle/deslogar.php"><i
                                        class="mdi mdi-arrow-left-bold-circle"></i> Sair</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <?php include 'painel.php'; ?>

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Lança Erro </h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Starter Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="nomecard">Cadastros de erros</div>
                        <div class="card-body">
                            <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">
                                <div class="form-group">
                                    <?php
                                    if (isset($_GET['campovazio'])): ?>
                                        <meta http-equiv="refresh" content="1;url=lanca_erro.php"/>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Campo Vazio!</strong> Preencha todos os campos<strong> </strong>
                                            <a href="lanca_erro.php" close>
                                                <label> X </label>
                                            </a>
                                        </div>
                                    <?php endif ?>
                                    <?php

                                    if (isset($_GET['sucesso'])): ?>
                                        <meta http-equiv="refresh" content="1;url=lanca_erro.php"/>
                                        <div class="alert alert-warning alert-dismissible fade show"
                                             style="background: #7cce6c" role="alert">
                                            <strong>Sucesso !</strong> Cadastrado Com Sucesso <strong> </strong>
                                            <a href="lanca_erro.php" close>
                                                <label> X </label>
                                            </a>
                                        </div>
                                    <?php
                                    endif ?>


                                    <form action="valida_cadastro_erro.php" method="POST">
                                        <div class="form-group">
                                            <!-- <label>Usuario Logado</label> -->
                                            <input type="text" class="form-control" hidden
                                                   value="<?php echo $_SESSION['nome'] ?>">
                                        </div>

                                        <label>Selecione a filial</label>
                                        <select class="custom-select col-12" name="filial">
                                            <option selected>Filial</option>
                                                
                                            <option> 17 - Mix Tirirical</option>
                                                
                                            <option> 20 - Curva do 90</option>
                                                
                                            <option> 26 - Mix Marabá</option>
                                                
                                            <option> 28 - Mix Parauapebas</option>
                                                
                                            <option> 29 - Jardim Tropical</option>
                                                
                                            <option> 32 - Mix Timon</option>
                                                
                                            <option> 37 - Mix Belém</option>
                                                
                                            <option> 38 - Mix Altamira</option>
                                                
                                            <option> 39 - Mix Chapadinha</option>
                                                
                                            <option> 41 - Mix Caxias</option>
                                                
                                            <option> 44 - Mix Babaçulândia</option>
                                                
                                            <option> 47 - Mix Bacabal</option>
                                                
                                            <option> 48 - Mix Pedreiras</option>
                                                
                                            <option> 49 - Mix Castanhal</option>
                                                
                                            <option> 50 - Mix Abaetetuba</option>
                                                
                                            <option> 51 - Mix Marituba</option>
                                                
                                            <option> 52 - Mix Açailandia</option>
                                                
                                            <option> 91 - Mix Santa Inês</option>
                                                
                                            <option> 92 - Mix Bacuri</option>
                                                
                                            <option> 93 - Mix Maiobão</option>
                                                
                                            <option> 94 - Mix Balsas</option>
                                                
                                            <option> 95 - Mix Tamandaré</option>
                                                
                                            <option> 96 - Mix João Paulo</option>
                                                
                                            <option> 99 - Mix Pinheiro</option>
                                                
                                            <option> 251 - Mix Parnaíba</option>
                                                
                                            <option> 252 - Mix Teresina</option>
                                                
                                            <option> 253 - Mix Pedreiras Belém</option>
                                                
                                            <option> 254 - Mix Parque dos Carajás</option>
                                                
                                            <option> 255 - Mix Araçagy</option>
                                                
                                            <option> 252 - MIX TERESINA-NOVAFAPI</option>
                                                
                                            <option> 97 - MIX TERESINA CEASA</option>
                                                
                                            <option> 261 - MIX REDENÇÃO</option>
                                                
                                            <option> 98 - MIX BARRA DO CORDA</option>
                                                
                                            <option> 259 - MIX FORQUILIA</option>
                                        </select>

                                        <label>Cidade</label>
                                        <select class="custom-select col-12" name="cidade">
                                            <option selected>Cidade</option>
                                                
                                            <option> Cidade 1</option>
                                                
                                            <option> Cidade 2</option>
                                                
                                            <option> Cidade 3</option>
                                                
                                            <option> Cidade 4</option>
                                                
                                            <option> Cidade 5</option>
                                                
                                            <option> Cidade 6</option>
                                                
                                            <option> Cidade 7</option>
                                                
                                            <option> Cidade 8</option>
                                                
                                            <option> Cidade 9</option>
                                                
                                            <option> Cidade 10</option>
                                        </select>
                                        <br>

                                        <label>Rua</label>
                                        <select class="custom-select col-12" name="rua">
                                            <option selected>Rua</option>
                                                
                                            <option> Rua 1</option>
                                                
                                            <option> Rua 2</option>
                                                
                                            <option> Rua 3</option>
                                                
                                            <option> Rua 4</option>
                                                
                                            <option> Rua 5</option>
                                                
                                            <option> Rua 6</option>
                                                
                                            <option> Rua 7</option>
                                                
                                            <option> Rua 8</option>
                                                
                                            <option> Rua 9</option>
                                                
                                            <option> Rua 10</option>
                                        </select>

                                        <label>Tipo do erro</label>
                                        <select class="custom-select col-12" name="tipoerro">
                                            <option selected>Erro</option>
                                                
                                            <option> Cancelado</option>
                                                
                                            <option> Quantidade</option>
                                                
                                            <option value="Endereco"> Endereço</option>
                                                
                                            <option> Desinternado</option>
                                        </select>
                                        <div class="form-group">
                                            <label>Numero Objeto</label>
                                            <input type="text" class="form-control" name="nomeobjeto"
                                                   placeholder="Numero objeto errado">
                                        </div>
                                        </select>

                                        <div class="form-group">
                                            <label>Usuario Do Erro</label>
                                            <input type="text" class="form-control" name="usuarioerro"
                                                   placeholder="Usuario colaborador que erro">
                                        </div>

                                        <div class="form-group">
                                            <label>Nome Do Colaborado</label>
                                            <input type="text" class="form-control" name="nomeerrocolaborador"
                                                   placeholder="Nome colaborador que erro">
                                        </div>

                                        <input type="submit" value="lançar erro" class="btn btn-primary">
                                        </from>

                                </div>
                            </div>
                        </div>
                        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap tether Core JavaScript -->
                        <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
                        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                        <!-- slimscrollbar scrollbar JavaScript -->
                        <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
                        <!--Wave Effects -->
                        <script src="../dist/js/waves.js"></script>
                        <!--Menu sidebar -->
                        <script src="../dist/js/sidebarmenu.js"></script>
                        <!--Custom JavaScript -->
                        <script src="../dist/js/custom.min.js"></script>
</body>

</html>