<?php
include('../controlle/controla_sessao.php');
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
    <title>Adutoria Wms - Grupo Mateus</title>
    <!-- Custom CSS -->
    <link href="../nice-html/ltr/cssmanipulado.css" rel="stylesheet">
    <link href="../nice-html/ltr/cads.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- <link href="style.css" rel="stylesheet"> -->
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
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
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
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard </h4>
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
            <style>
                .cad_wms1 {
                    height: 100px;
                    width: 200px;
                    float: left;
                    margin: 10px;
                    border: #808284 solid 0, 3;
                    border-left-width: 5px;
                    border-left-style: solid;
                    border-left-color: orangered;
                }

                .cad_wms2 {
                    height: 100px;
                    width: 200px;
                    float: left;
                    margin: 10px;
                    border: #808284 solid 0, 3;
                    border-left-width: 5px;
                    border-left-style: solid;
                    border-left-color: green;
                }

                .cad_wms3 {
                    height: 100px;
                    width: 200px;
                    float: left;
                    margin: 10px;
                    border: #808284 solid 0, 3;
                    border-left-width: 5px;
                    border-left-style: solid;
                    border-left-color: blue;
                }

                .cad_wms4 {
                    height: 100px;
                    width: 200px;
                    float: left;
                    margin: 10px;
                    border: #808284 solid 0, 3;
                    border-left-width: 5px;
                    border-left-style: solid;
                    border-left-color: darkmagenta;
                }

                .cad_wms5 {
                    height: 100px;
                    width: 200px;
                    float: left;
                    margin: 10px;
                    border: #808284 solid 0, 3;
                    border-left-width: 5px;
                    border-left-style: solid;
                    border-left-color: red;
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="nomecard" style="height: 100%;">
                                <div>
                                    <?php
                                    include('Relatorios_class.php');
                                    $objCars = new Cardes();


                                    ?>
                                    <form method="GET" action="painel_adm.auditoria.php">
                                        <ennter>
                                            <div class="col-5 align-self-center" style="float:left;width:1200px ">
                                                <label>Selecione a filial</label>
                                                <select class="custom-select col-12" name="filial">
                                                    <option selected>Filial </option>
                                                        <option value="17"> 17 - Mix Tirirical </option>
                                                        <option value="20"> 20 - Curva do 90 </option>
                                                        <option value="26"> 26 - Mix Marabá </option>
                                                        <option value="28"> 28 - Mix Parauapebas </option>
                                                        <option value="29"> 29 - Jardim Tropical </option>
                                                        <option value="32"> 32 - Mix Timon </option>
                                                        <option value="37"> 37 - Mix Belém </option>
                                                        <option value="38"> 38 - Mix Altamira </option>
                                                        <option value="39"> 39 - Mix Chapadinha </option>
                                                        <option value="41"> 41 - Mix Caxias </option>
                                                        <option value="44"> 44 - Mix Babaçulândia </option>
                                                        <option value="47"> 47 - Mix Bacabal </option>
                                                        <option value="48"> 48 - Mix Pedreiras </option>
                                                        <option value="49"> 49 - Mix Castanhal </option>
                                                        <option value="50"> 50 - Mix Abaetetuba </option>
                                                        <option value="51"> 51 - Mix Marituba </option>
                                                        <option value="52"> 52 - Mix Açailandia </option>
                                                        <option value="91"> 91 - Mix Santa Inês </option>
                                                        <option value="92"> 92 - Mix Bacuri </option>
                                                        <option value="93"> 93 - Mix Maiobão </option>
                                                        <option value="94"> 94 - Mix Balsas </option>
                                                        <option value="95"> 95 - Mix Tamandaré </option>
                                                        <option value="96"> 96 - Mix João Paulo </option>
                                                        <option value="99"> 99 - Mix Pinheiro </option>
                                                        <option value="251 "> 251 - Mix Parnaíba </option>
                                                        <option value="252 "> 252 - Mix Teresina </option>
                                                        <option value="253 "> 253 - Mix Pedreiras Belém </option>
                                                        <option value="254 "> 254 - Mix Parque dos Carajás </option>
                                                        <option value="255 "> 255 - Mix Araçagy </option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-7 align-self-center" style="float:left; margin-top:9px">
                                                <input type="submit" name="busca" class="btn btn-primary" value="Filtra">
                                            </div>
                                    </form>
                                </div>
                            </div>
                            </ennter>
                            <div class="card-body">


                                <div class="shadow p-3 mb-5  cad_wms1">
                                    <label class="colormorador">Qtd Erros</label>
                                    <div>
                                        <h4 style="float: right;">
                                            <?php
                                            $objCars->pegaFilial();
                                            $objCars->quantidadeErroos();

                                            ?>
                                        </h4>
                                        <h3>
                                            <i class="mdi mdi-account ajusteIcad colormorador" style="color:darkslategrey; float:left; color:orangered"></i>
                                        </h3>
                                    </div>
                                    <div>
                                    </div>
                                </div>

                                <div class="shadow p-3 mb-5  cad_wms2">
                                    <label class="colormorador2"> Qtd Cancelado</label>
                                    <div>

                                        <h3>
                                            <i class="mdi mdi-cash-multiple" style="color:darkslategrey; float:left;color:orangered "></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: right; color:green">
                                        <?php
                                        $objCars->pegaFilial();
                                        $objCars->quantidadeCancelados();

                                        ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>
                                <div class="shadow p-3 mb-5  cad_wms3">
                                    <label class="colormorador3">Qtd Divergentes</label>
                                    <div>
                                        <h3> <i class="mdi mdi-account-card-details" style="color:darkslategrey; float:left;color:blue"></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: right;color:blue">
                                        <?php
                                        $objCars->pegaFilial();
                                        $objCars->quantidadeDivergente()

                                        ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>

                                <div class="shadow p-3 mb-5  cad_wms4">
                                    <label class="colormorador4">Qtd Endereço </label>
                                    <div>
                                        <h3>
                                            <i class="mdi mdi-cash" style="color:darkslategrey; float:left ;color:rebeccapurple"></i>
                                        </h3>
                                    </div>
                                    <div>
                                        <h4 style="float: right; color:rebeccapurple">

                                            <?php
                                            $objCars->pegaFilial();
                                            $objCars->quantidadedeErroEnderecos();
                                            ?>
                                        </h4>
                                    </div>
                                </div>

                                <div class="shadow p-3 mb-5  cad_wms5">
                                    <label class="colormorador5"> Qtd Desinternados </label>
                                    <div>
                                        <h3>
                                            <i class="mdi mdi-cash-usd" style="color:darkslategrey; float:left;color:orangered"></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: right;">
                                        <?php
                                        $objCars->pegaFilial();
                                        $objCars->quantidadedeErroDesinternados();
                                        ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>
                                <div class="shadow p-3 mb-5  cad_wms5">
                                    <label class="colormorador5"> Erros De Hoje </label>
                                    <div>
                                        <h3>
                                            <i class="mdi mdi-cash-usd" style="color:darkslategrey; float:left;color:orangered"></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: right;">
                                        <?php
                                        $objCars->pegaFilial();
                                        $objCars->ErrosDeHoje();
                                        ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>

                                <div class="shadow p-3 mb-5  cad_wms5">
                                    <label class="colormorador5"> Erros Do Mês </label>
                                    <div>
                                        <h3>
                                            <i class="mdi mdi-cash-usd" style="color:darkslategrey; float:left;color:orangered"></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: left;">
                                        <?php
                                        $objCars->pegaFilial();
                                        // $objCars->ErrosDoMes();
                                        ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>
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