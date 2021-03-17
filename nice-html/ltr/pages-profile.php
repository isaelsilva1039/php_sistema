<?php

// include'../../conexao/conexao.php';
include 'controle_sesao.php';
include '../../model/Class.configue.php';
$perfil = new Validacao();

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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/logo-mateus.ico">
    <title>Adutoria Wms - Grupo Mateus</title>
    <!-- Custom CSS -->

    <link href="../../dist/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <!-- ==========================================d==================== -->
                <div class="navbar-brand">
                    <a href="index.html" class="logo">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo"/>
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo"/>
                            <!-- Light Logo text -->
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage"/>
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
                   data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../../assets/images/users/conferente.jpg" alt="user" class="rounded-circle"
                                    width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="pages-profile.php"><i class="ti-user m-r-5 m-l-5"></i>
                                Meu
                                Perfil</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                My
                                Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                Inbox</a>
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
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="../../auditoria/painel_adm.auditoria.php" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.php"
                           aria-expanded="false">
                            <i class="mdi mdi-account-network"></i>
                            <span class="hide-menu">Meu Perfil</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Profile</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid col-lg-12 col-xlg-1 col-md-1">
            <div class="row col-lg-12 col-xlg-1 col-md-1">
                <div class="">

                    <?php
                    $usuariologadosistaemsesseion = $_SESSION['id'];
                    $usuariologadosistaemsesseionId = $_SESSION['id'];

                    foreach ($perfil->perfil($usuariologadosistaemsesseion) as $per) : ?>

                    <!--                    avatar faz o previw depois de selecionado no input a baixo -->
                    <img src="../img/<?php echo $per['foto'] ?>"
                         class=" imagemPefilReturn avatar img-circle img-thumbnail" alt="avatar">
                    <form class="form-horizontal form-material" method="POST"
                          action="../../Controlle/controle_update_perfil_imagem.php" enctype="multipart/form-data">
                        <div class="form-group container-fluid"><label class="nomeperfil"> <i
                                        class="mdi mdi-checkbox-blank-circle botaoOnline">
                                </i><?php echo $per['nome'] ?>
                                <br>
                            </label>
                            <!-- CAMPO PARA SELECIONA UMA NOVA IMAGEM  -->
                            <div class="col-md-12">
                                <label class="label1" for="foto"> <i class="mdi mdi-camera"> </i>Nova Foto
                                    Perfil</label>

                                <input type="file" required="" name="foto" accept="image/*" id="foto"
                                       class="form-control form-control-line mdi mdi-account-edit btn-file text-center center-block file-upload">
                                <input type="text" required="" name="id" hidden
                                       class="form-control form-control-line" value="<?php echo $per['id'] ?>"><br>
                                <input type="submit" name="Salva" value="Salva" class="btnSalva">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7 col-xlg-7 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="POST"
                                  action="../../controlle/controle_update_perfil.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="id" hidden class="form-control form-control-line"
                                           value="<?php echo $per['id'] ?>">

                                    <label class="col-md-12">Nome</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Johnathan Doe" required="" name="nome"
                                               class="form-control form-control-line"
                                               value="<?php echo $nome = $per['nome'] ?>">
                                        <input type="text" name="id" hidden class="form-control form-control-line"
                                               value="<?php echo $per['id'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" required="" placeholder="johnathan@admin.com"
                                               class="form-control form-control-line" name="email"
                                               value="<?php echo $per['email'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="text" required="" class="form-control form-control-line"
                                               name="senha" value="<?php echo $per['senha'] ?>">
                                    </div>
                                </div>

                                <?php endforeach; ?>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Salva</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <h4 class="page-title"> Alteraçoes </h4>
                        <div class="">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    foreach ($perfil->alteracoesFeitasNoPerfilEmUsuariosLogados($usuariologadosistaemsesseionId) as $perfileditado): ?>
                                        <div class="form-group">
                                            <label class="col-md-12"> <i class="mdi mdi-account-edit it"></i>
                                                <?php echo $perfileditado['nome_completo'] . "  :" ?>
                                                <label><?php echo $perfileditado['data_historico'] ?> </label> </label>
                                            <div style="margin-left: 35px">
                                                .<br>.<br>.<br>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                            </form>
                            <style>
                                .it {
                                    font-size: x-large;
                                    margin: 10px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="script.js"></script>
    <script>
        //            fazer um previw da imagem selecionada antes de salva no banco
        //            formulario seleciona e essa fun em javaScrip faz o previu
        $(document).ready(function () {

            var readUrl = function (input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.readAsDataURL(input.files[0]);

                    reader.onload = function (e) {
                        $(".avatar").attr('src', e.target.result);
                    }

                }
            }

            $(".file-upload").on('change', function () {
                readUrl(this);
            });

            $(".avatar").click(function () {
                var btn = $(".file-upload");
                btn.trigger('click');
            });
        });
    </script>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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