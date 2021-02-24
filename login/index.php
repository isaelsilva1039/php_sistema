<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="../dist/css/style.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-mateus.ico">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css_login.css">
<link href="../dist/css/style.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<body class="corpo">
  <div class="circulo2">
    i
  </div>
  <div class=" fadeInDown ">
    <div id="formContent" class="t form">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first form">
        <!-- <img src= /> -->
      </div>


      <br>
      <form method="POST" action="controlle/controle_login.php">
        <input type="text" class="fadeIn second" name="email" placeholder="email">
        <input type="text" class="fadeIn second" name="senha" placeholder="senha">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter" class="form">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
    </div>
    <div class="circulo">
    </div>
    <div class="m">
      <img class="img" src="https://raw.githubusercontent.com/giovannamoeller/sign-up-form/aadfbbecbd1c65121767d3630678044b85125763/assets/mobile.svg"> </img>
    </div>

    <?php
    if (isset($_GET['erro'])) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Senha Errada!</strong> Se você não tem usuario, falar com O suporte <strong> (99) 992292338. </strong>
        <a href="index.php" close>
          <label> X </label>
        </a>
      </div>

    <?php endif ?>

    <style>
      .t {
        background: #161923;
        float: left;
        margin-top: 190px;
        margin-left: 190px;

      }

      .form {
        background: #161923;
      }

      .img {
        float: right;
        margin-top: 40px;
        margin-right: 30px;
        /* height: 250px; */
      }

      .corpo {
        background: #1b2029;
      }

      .circulo {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background: linear-gradient(45deg, #e8cbc0, #636fa4);
        clip-path: circle(40% at right 80%);
        z-index: -1;
      }
      

      /* .circulo2{
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    background: linear-gradient(45deg, #e8cbc0, #636fa4);
    clip-path: circle(40% at left 120%);

    } */
    </style>
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
  </div>
</body>