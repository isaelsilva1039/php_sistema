<?php
session_start();
require_once '../../model/Class.configue.php';
$contaRe = new Validacao();
// se caso o usuario não tiver o perfil diferente do numero 1 (master)ele e redirecionado pra sua pagina de orige
if ($_SESSION['nivel'] === '1') {


} elseif ($_SESSION['nivel'] === '2') {

    header("location: ../auditoria/painel_adm.auditoria.php");

} elseif ($_SESSION['nivel'] === '3') {

    header("location: ../../auditoria/painel_adm_auditoria_supervisor.php");
} else {
    echo "Não deu certo ";
}

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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Nice admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="cssmanipulado.css" rel="stylesheet">
    <link href="../../dist/css/style.css" rel="stylesheet">
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
                                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="pages-profile.php"><i class="ti-user m-r-5 m-l-5"></i> Meu Perfil</a>
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

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Perfil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../contas/contas_a_pagar.php" aria-expanded="false">
                                <i class="mdi mdi-cash-multiple"></i>
                                <span class="hide-menu">Financeniro</span>
                            </a>
                        </li>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../relatorios/relatorio_funcionarios.php" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Relatorios</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Cadastro.php" aria-expanded="false">
                                <i class="mdi mdi-lan"></i>
                                <span class="hide-menu">Cadastro</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="usuarios.php" aria-expanded="false">
                                <i class="mdi mdi-account-key"></i>
                                <span class="hide-menu">Usuario</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../controlle/deslogar.php" aria-expanded="false">
                                <i class="mdi mdi-alert-outline"></i>
                                <span class="hide-menu">Sair </span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
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
            <?php
            $s = $contaRe->valorSalario();
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="nomecard">Crdas Mais Visto</div>
                            <div class="card-body">
                                <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">
                                    <label class="colormorador">Qtd Morador</label>
                                    <div>
                                        <h4 style="float: right;">
                                            <?php echo $contaRe->contamoradores(); ?>
                                        </h4>
                                        <h3>
                                            <i class="mdi mdi-account ajusteIcad colormorador" style="color:darkslategrey; float:left; color:orangered"></i>
                                        </h3>
                                    </div>
                                    <div>
                                    </div>
                                </div>

                                <div class="quadros_dahs2 shadow p-3 mb-5 bg-white rounded ">
                                    <label class="colormorador2"> Aluguel</label>
                                    <div>
                                        <h3>
                                            <i class="mdi mdi-cash-multiple" style="color:darkslategrey; float:left;color:green "></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: right;">
                                        <?php
                                        $sd = $contaRe->valorAluguel();
                                        foreach ($sd as $key) {
                                            echo "R$" . " " . $valorAlugue = ($key[0]);
                                        } ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>


                                <div class="quadros_dahs3 shadow p-3 mb-5 bg-white rounded ">
                                    <label class="colormorador3"> Qtd Funcionario</label>
                                    <div>
                                        <h3> <i class="mdi mdi-account-card-details" style="color:darkslategrey; float:left;color:blue"></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: right;">
                                        <?php echo $contaRe->contaFuncionarios();
                                        ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>

                                <div class="quadros_dahs4 shadow p-3 mb-5 bg-white rounded ">
                                    <label class="colormorador4"> Salarios Funcionarios </label>
                                    <div>
                                        <h3>
                                            <i class="mdi mdi-cash" style="color:darkslategrey; float:left ;color:rebeccapurple"></i>
                                        </h3>
                                    </div>
                                    <div>
                                        <h4 style="float: right;">
                                            <?php
                                            foreach ($s as $key) {
                                                echo "R$" . " " . $salariofuncionario = ($key[0]);
                                            }
                                            ?>
                                        </h4>
                                    </div>
                                </div>

                                <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">
                                    <label class="colormorador5"> Saldo </label>
                                    <div>
                                        <h3>
                                            <i class="mdi mdi-cash-usd" style="color:darkslategrey; float:left;color:orangered"></i>
                                        </h3>
                                    </div>
                                    <h4 style="float: right;">
                                        <?php
                                        $soma = $valorAlugue - $salariofuncionario;
                                        echo "R$" . " " . $soma;
                                        ?>
                                    </h4>
                                    <div>
                                    </div>
                                </div>




                                <!-- CARDES -->


                                <!-- ============================================================== -->
                            </div>
                        </div>
                    </div>


                    <!-- Cards contas a paga e receber geral -->


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="nomecard">Crdas Receita e Pagamentos</div>
                                    <div class="card-body">
                                        <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador">Qtd a Pagar</label>
                                            <div>
                                                <h4 style="float: right;">
                                                    <?php echo $contaRe->contamoradores(); ?>
                                                </h4>
                                                <h3>
                                                    <i class="mdi mdi-account ajusteIcad colormorador" style="color:darkslategrey; float:left; color:orangered"></i>
                                                </h3>
                                            </div>
                                            <div>
                                            </div>
                                        </div>

                                        <div class="quadros_dahs2 shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador2"> Qtd Pagas</label>
                                            <div>
                                                <h3>
                                                    <i class="mdi mdi-cash-multiple" style="color:darkslategrey; float:left;color:green "></i>
                                                </h3>
                                            </div>
                                            <h4 style="float: right;">
                                                3
                                                <div>
                                                </div>
                                        </div>


                                        <div class="quadros_dahs3 shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador3"> Qtd a Receber</label>
                                            <div>
                                                <h3> <i class="mdi mdi-account-card-details" style="color:darkslategrey; float:left;color:blue"></i>
                                                </h3>
                                            </div>
                                            <h4 style="float: right;">
                                                2
                                            </h4>
                                            <div>
                                            </div>
                                        </div>

                                        <div class="quadros_dahs4 shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador4"> Qtd Recebido </label>
                                            <div>
                                                <h3>
                                                    <i class="mdi mdi-cash" style="color:darkslategrey; float:left ;color:rebeccapurple"></i>
                                                </h3>
                                            </div>
                                            <div>
                                                <h4 style="float: right;">
                                                    10
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador5"> Movimentaçoes </label>
                                            <div>
                                                <h3>
                                                    <i class="mdi mdi-cash-usd" style="color:darkslategrey; float:left;color:orangered"></i>
                                                </h3>
                                            </div>
                                            <h4 style="float: right;">
                                                16
                                            </h4>
                                            <div>
                                            </div>
                                        </div>
                                        <!-- valors cardas contas a pagar e a receber  -->



                                        <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador">Valor a Pagar</label>
                                            <div>
                                                <h4 style="float: right;">
                                                    R$ 1.200
                                                </h4>
                                                <h3>
                                                    <i class="mdi mdi-account ajusteIcad colormorador" style="color:darkslategrey; float:left; color:orangered"></i>
                                                </h3>
                                            </div>
                                            <div>
                                            </div>
                                        </div>

                                        <div class="quadros_dahs2 shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador2"> Volor Pago</label>
                                            <div>
                                                <h3>
                                                    <i class="mdi mdi-cash-multiple" style="color:darkslategrey; float:left;color:green "></i>
                                                </h3>
                                            </div>
                                            <h4 style="float: right;">
                                                R$ 1.125
                                                <div>
                                                </div>
                                        </div>


                                        <div class="quadros_dahs3 shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador3"> Valor a Receber</label>
                                            <div>
                                                <h3> <i class="mdi mdi-account-card-details" style="color:darkslategrey; float:left;color:blue"></i>
                                                </h3>
                                            </div>
                                            <h4 style="float: right;">
                                                R$ 1.350
                                            </h4>
                                            <div>
                                            </div>
                                        </div>

                                        <div class="quadros_dahs4 shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador4"> Valor recebido </label>
                                            <div>
                                                <h3>
                                                    <i class="mdi mdi-cash" style="color:darkslategrey; float:left ;color:rebeccapurple"></i>
                                                </h3>
                                            </div>
                                            <div>
                                                <h4 style="float: right;">
                                                    R$ 3.000
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="quadros_dahs shadow p-3 mb-5 bg-white rounded ">
                                            <label class="colormorador5"> Movimentaçoes </label>
                                            <div>
                                                <h3>
                                                    <i class="mdi mdi-cash-usd" style="color:darkslategrey; float:left;color:orangered"></i>
                                                </h3>
                                            </div>
                                            <h4 style="float: right;">
                                                %16
                                            </h4>
                                            <div>
                                            </div>
                                        </div>




                                        <!-- CARDES -->


                                        <!-- ============================================================== -->
                                    </div>
                                </div>
                            </div>

                            <!-- ============================================================== -->
                            <!-- End Wrapper -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- All Jquery -->
                            <!-- ============================================================== -->
                            <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
                            <!-- Bootstrap tether Core JavaScript -->
                            <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
                            <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                            <!-- slimscrollbar scrollbar JavaScript -->
                            <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
                            <!--Wave Effects -->
                            <script src="../../dist/js/waves.js"></script>
                            <!--Menu sidebar -->
                            <script src="../../dist/js/sidebarmenu.js"></script>
                            <!--Custom JavaScript -->
                            <script src="../../dist/js/custom.min.js"></script>
</body>

</html>