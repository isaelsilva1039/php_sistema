<!DOCTYPE html>
<?php
session_start();
?>

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
    <link href="../../dist/css/style.css" rel="stylesheet">
    <link href="cssmanipulado.css" rel="stylesheet">
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
                            <label></label> <?php echo $_SESSION['nome'] ?> </label>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/conferente.jpg" alt="user" class="rounded-circle" width="31"></a>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Cadastro.php" aria-expanded="false">
                                <i class="mdi mdi-city"></i>
                                <span class="hide-menu">Cadastra Condominio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Cadastro_modador.php" aria-expanded="false">
                                <i class="mdi mdi-account-plus"></i>
                                <span class="hide-menu">Cadastra Morador</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Cadastro_funcionario.php" aria-expanded="false">
                                <i class="mdi mdi-account-card-details"></i>
                                <span class="hide-menu">Cadastra Funcionario</span>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>

        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Starter Cadastros</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Cadastros</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="../../controlle/controle_cadastros_apt.php">
                            <div class="card">
                                <div class="card-body">
                                    <div style="float: left;margin: 20px;" class="form-group">
                                        <label class="corNomeFormulare">
                                            <h5>Bloco</h5>
                                        </label><BR>
                                        <select name="bloco" class="caixa_de_selesao">
                                            <option value="00">selecionar</option>
                                            <option value="Bloco 1">Bloco 1</option>
                                            <option value="Bloco 2">Bloco 2</option>
                                            <option value="Bloco 3">Bloco 3</option>
                                            <option value="Bloco 4">Bloco 4</option>
                                            <option value="Bloco 5">Bloco 5</option>
                                            <option value="Bloco 6">Bloco 6</option>
                                        </select>
                                    </div>

                                    <div style="float: left;margin: 20px;" class="form-group">
                                        <label class="corNomeFormulare">
                                            <h5>Nivel</h5>
                                        </label><BR>
                                        <select name="nivel" class="caixa_de_selesao" style="width: 200px; ">
                                            <option class="caixa_de_selesao" value="00"> selecionar</option>
                                            <option class="caixa_de_selesao" value="Nivel 1">Nivel 1</option>
                                            <option class="caixa_de_selesao" value="Nivel 2">Nivel 2</option>
                                            <option class="caixa_de_selesao" value="Nivel 3">Nivel 3</option>
                                            <option class="caixa_de_selesao" value="Nivel 4">Nivel 4</option>
                                            <option class="caixa_de_selesao" value="Nivel 5">Nivel 5</option>

                                        </select>
                                    </div>

                                    <div style="float:left;margin: 20px;" class="form-group">
                                        <label class="corNomeFormulare">
                                            <h5> Apartamento</h5>
                                        </label><BR>
                                        <select name="apartamento" class="caixa_de_selesao" style="width: 200px">
                                            <option class="caixa_de_selesao" value="00">selecionar</option>
                                            <option class="caixa_de_selesao" value="Apartamento 1">Apartamento 1</option>
                                            <option class="caixa_de_selesao" value="Apartamento 2">Apartamento 2</option>
                                            <option class="caixa_de_selesao" value="Apartamento 3">Apartamento 3</option>
                                            <option class="caixa_de_selesao" value="Apartamento 4">Apartamento 4</option>
                                            <option class="caixa_de_selesao" value="Apartamento 5">Apartamento 5</option>
                                            <option class="caixa_de_selesao" value="Apartamento 6">Apartamento 6</option>
                                            <option class="caixa_de_selesao" value="Apartamento 7">Apartamento 7</option>
                                            <option class="caixa_de_selesao" value="Apartamento 8">Apartamento 8</option>
                                            <option class="caixa_de_selesao" value="Apartamento 9">Apartamento 9</option>
                                            <option class="caixa_de_selesao" value="Apartamento 10">Apartamento 10</option>
                                        </select>

                                    </div>
                                    <br>
                                    <input type="Submit" name="Cadastra" value="Cadastra" class="btn_cadastra" style="width: 200px; float:right;margin: 30px;"> <br><br>
                                    </from>
                                    <br>
                                    <hr style="background: blue;">

                                    <?php


                                    include_once '../../model/Class.configue.php';

                                    $lista = new Validacao();
                                    ?>
                                    <h3> <label> Cinco Utimos Cadastros</label></h3>
                                    <br><br>

                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="thead">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>bloco</th>
                                                    <th>mivel</th>
                                                    <th>apartamento</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($lista->listaDeuBlocos() as $lis) : ?>
                                                    <tr class="tr">
                                                        <td> <?php echo $lis['id'] ?></td>
                                                        <td> <?php echo $lis['bloco'] ?></td>
                                                        <td> <?php echo $lis['nivel'] ?></td>
                                                        <td> <?php echo $lis['apartamento'] ?></td>
                                                        <td style="text-align: center;">
                                                        </td>
                                                        <!-- Botões de Ações -->
                                                        <td style="text-align: center;">
                                                        </td>
                                                        <!-- Fim - Form de Transacao -->
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <hr><br><br>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer text-center">

        </footer>
    </div>

    </div>

    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../../dist/js/waves.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    <script src="../../dist/js/custom.min.js"></script>
</body>

</html>