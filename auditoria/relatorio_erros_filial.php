<?php
require('../controlle/controla_sessao.php');
include('Relatorios_class.php');
$Obj = new Relatorioserros();
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt">
<meta charset="utf-8">

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
    <link href="style.css" rel="stylesheet">
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
                            <label></label> <?php echo $_SESSION['nome'] ?> </label>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/conferente.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="../nice-html/ltr/pages-profile.php"><i class="ti-user m-r-5 m-l-5"></i> Meu Perfil</a>
                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a> -->
                                <a class="dropdown-item" href="../controlle/deslogar.php"><i class="mdi mdi-arrow-left-bold-circle"></i> Sair</a>
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
                        <h4 class="page-title">Relatorios Erros Por Filial </h4>
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
                            <div class="nomecard"> </div>
                            <div class="card-body">
                                <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">

                                    <div class="form-group">
                                        <div class="container-fluid">
                                        </style>
                                            <div cass="card-body">
                                            
                                                <div class="div_limiteporpagina">
                                                
                                                    <form class="from_filtro1" method="GET" action="relatorio_erros_filial.php">
                                                        <!-- <option selected...> Qunatidade A Mostra </option> -->
                                                        <input class="campoBusca" name="datainicial" type="date" placeholder="Busca" style="width: 200px; border: 1px solid gainsboro; border-radius: 40px; height: 40px;">
                                                        <label> A </label>
                                                        <input class="campoBusca" name="dataFim" type="date" placeholder="Busca " style="width: 200px; border: 1px solid gainsboro; border-radius: 40px; height: 40px;">

                                                        <input type="submit" name="busca" class="btn btn-primary" style="border-radius: 30px; height: 38px; " value="Filtra">
                                                    </form>
                                                    
                                                </div>
                                                <BR>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive m-t-20">
                                                           
                                                                <table class="table table-bordered table-responsive-lg">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="col"> Filial </th>
                                                                            <th scope="col"> Qtd </th>
                                                                        </tr>
                                                                    </tbody>
                                                                    <?php

                                                                    // $Obj->relatorioErrosAuditoriaNoturna();
                                                                    // $Obj->limite();
                                                                    // $Obj->Filto();
                                                                    $Obj->datasFiltros();
                                                                    $Obj->datasFiltrosFim();

                                                                    foreach ($Obj->pegaFilialMotraQuantidadeDeerros() as $relatoerio) :
                                                                        // $data = implode("/", array_reverse(explode("-", $relatoerio['data'])));
                                                                        // 
                                                                    ?>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td scope="col"> <?PHP echo $relatoerio['filial'] ?> </td>
                                                                                <td scope="col"> <?PHP echo $somaerro = $relatoerio['Count(*)'] ?> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    <?php
                                                                       
                                                                    endforeach; ?>
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