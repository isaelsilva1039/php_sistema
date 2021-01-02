<?php
include('Contas_class.php');


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
    <!-- <link href="cssmanipulado.css" rel="stylesheet"> -->
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                    width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../ltr/index.php"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="contas_a_pagar.php"
                                aria-expanded="false">
                                <i class="mdi mdi-cash-multiple"></i>
                                <span class="hide-menu"> Lança Contas</span>
                            </a>
                        </li>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Relatorios Contas A Pagar</span>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">

                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <form action="" method="GET">
                                            <button type="submit" name="janeiro"
                                                class="btna  margi-mes">Janeiro</button>
                                            <button type="submit" name="fevereiro"
                                                class="btna  margi-mes">Fevereiro</button>
                                            <button type="submit" name="marco" class="btna  margi-mes">Março</button>
                                            <button type="submit" name="abril" class="btna  margi-mes">Abril</button>
                                            <button type="submit" name="maio" class="btna  margi-mes">Maio</button>
                                            <button type="submit" name="junho" class="btna  margi-mes">Junho</button>
                                            <button type="submit" name="julho" class="btna  margi-mes">Julho</button>
                                            <button type="submit" name="agosto" class="btna  margi-mes">Agosto</button>
                                            <button type="submit" name="setembro"
                                                class="btna  margi-mes">Setembro</button>
                                            <button type="submit" name="outubro"
                                                class="btna  margi-mes">Outubro</button>
                                            <button type="submit" name="novembro"
                                                class="btna  margi-mes">Novembro</button>
                                            <button type="submit" name="dezembro"
                                                class="btna  margi-mes">Dezembro</button>
                                        </form>
                                        <?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                        
                                        ?>
                                    </div>
                                </div>
                                <hr>
                                <!-- Botão janela modal -->
                                <button type="button" class="btnn" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    Nova Conta
                                </button>

                                <button type="button" class="btnn" data-toggle="modal"
                                    data-target="#exampleModalCenterFIXA">
                                    Conta Fixa
                                </button>


                                <button type="button" class="btnn" data-toggle="modal"
                                    data-target="#exampleModalCenternovapessoa">
                                    Nova Pessoa / Empresa
                                </button>

                                <button type="button" class="btnn" data-toggle="modal"
                                    data-target="#exampleModalCenternovacategoria">
                                    Nova Categoria
                                </button>

                                <br>
                                <hr>
                                <style>
                                .btnn {
                                    background-color: darkcyan;
                                    color: white;
                                    border-radius: 10%;
                                    border: 1px solid;
                                    height: 35px;
                                }

                                .btna {
                                    background-color: darkcyan;
                                    color: white;
                                    border-radius: 10%;
                                    border: 1px solid;
                                    height: 35px;
                                }

                                .lateral {
                                    float: left;
                                }

                                .ladodireito {
                                    float: end;
                                }
                                </style>
                                <?php

                                ?>
                                <div class="table-responsive ladodireito">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Data</th>
                                                <th scope="col">Descrição</th>
                                                <th scope="col">Valor </th>
                                                <th scope="col">Pago A</th>
                                                <th scope="col">Categoria</th>
                                                <th scope="col">Pago </th>
                                                <th scope="col">Açoes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>01/01/2021</td>
                                                <td>Conta chacara</td>
                                                <td>500,00</td>
                                                <td>Emanoel</td>
                                                <td>Investimento</td>
                                                <td>Não</td>
                                                <td>Botão</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="lateral">
                                    </div>
                                    <!-- Janela modal nova conta -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Nova categoria
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="receber_cotas.php">
                                                    <div class="modal-body">
                                                        <div class="form-row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="validationServer03">Data</label>
                                                                <input type="date" class="form-control is-invalid"
                                                                    name="data" placeholder="Data" required>
                                                                <div class="invalid-feedback">
                                                                    Digite uma data
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label for="validationServer03">Descrição</label>
                                                                <input type="text" class="form-control is-invalid"
                                                                    name="descricao" placeholder="Descrição" required>
                                                                <div class="invalid-feedback">
                                                                    Digite Uma Descrição
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label for="validationServer03">Valor</label>
                                                                <input type="text" class="form-control is-invalid"
                                                                    name="valor" placeholder="Valor" required>
                                                                <div class="invalid-feedback">
                                                                    Digite O valor
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <label class="mr-sm-2"
                                                                    for="inlineFormCustomSelect">Parcela</label>
                                                                <select class="custom-select mr-sm-2 s-invalid" name="parcela" >
                                                                    <option selected..>Parcela</option>
                                                                    <option value="avista">Avista</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Selecione o tipo de pagamento
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <label class="mr-sm-2"
                                                                    for="inlineFormCustomSelect">Categoria</label>
                                                                <select class="custom-select mr-sm-2" name="categoria">
                                                                    <option selected>Categoria</option>
                                                                    <option>Imobiliaria</option>
                                                                    <option>Investimento</option>
                                                                    <option>Imposto</option>
                                                                    <option>Salario</option>
                                                                    <option>Cartão</option>
                                                                    <option>Finaciamento</option>
                                                                </select>
                                                            </div>

                                                            <div>
                                                                <label class="mr-sm-2"
                                                                    for="inlineFormCustomSelect">Pago</label>
                                                                <select class="custom-select mr-sm-2" name="pago">
                                                                    <option selected>Pago</option>
                                                                    <option value="nao">Não</option>
                                                                    <option value="sim">Sim</option>
                                                                </select>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancelar</button>
                                                                <button type="Subimit"
                                                                    class="btn btn-primary">Salvar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>



                                    <!-- Modal Conta FIXA -->


                                    <div class="modal fade" id="exampleModalCenterFIXA" tabindex="-1" role="dialog"
                                        aria-labelledby="#exampleModalCenterFIXA" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer03">Data</label>
                                                            <input type="date" class="form-control is-invalid"
                                                                name="data" placeholder="Data" required>
                                                            <div class="invalid-feedback">
                                                                Digite uma data
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer03">Descrição</label>
                                                            <input type="text" class="form-control is-invalid"
                                                                name="descricao" placeholder="Descrição" required>
                                                            <div class="invalid-feedback">
                                                                Digite Uma Descrição
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer03">Valor</label>
                                                            <input type="text" class="form-control is-invalid"
                                                                name="valor" placeholder="Valor" required>
                                                            <div class="invalid-feedback">
                                                                Digite O valor
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <label class="mr-sm-2"
                                                                for="inlineFormCustomSelect">Parcela</label>
                                                            <select class="custom-select mr-sm-2" id="parcela">
                                                                <option selected>Parcela</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="2">3</option>
                                                                <option value="2">4</option>
                                                                <option value="2">5</option>
                                                                <option value="2">6</option>
                                                                <option value="2">7</option>
                                                                <option value="2">8</option>
                                                                <option value="2">9</option>
                                                                <option value="2">10</option>
                                                                <option value="2">11</option>
                                                                <option value="2">12</option>
                                                            </select>
                                                        </div>

                                                        <div>
                                                            <label class="mr-sm-2"
                                                                for="inlineFormCustomSelect">Categoria</label>
                                                            <select class="custom-select mr-sm-2" name="categoria">
                                                                <option selected>Categoria</option>
                                                                <option value="1">Imobiliaria</option>
                                                                <option value="2">Investimento</option>
                                                                <option value="2">Imposto</option>
                                                                <option value="2">Salario</option>
                                                                <option value="2">Cartão</option>
                                                                <option value="2">Finaciamento</option>
                                                            </select>
                                                        </div>

                                                        <div>
                                                            <label class="mr-sm-2"
                                                                for="inlineFormCustomSelect">Pago</label>
                                                            <select class="custom-select mr-sm-2" name="pago">
                                                                <option selected>Pago</option>
                                                                <option value="1">Não</option>
                                                                <option value="2">Sim</option>
                                                            </select>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- Nova pessoa -->


                                            <!-- nova categoria -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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