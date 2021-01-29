<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="../dist/css/style.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-mateus.ico">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css_login.css">
<link href="../dist/css/style.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src= /> -->
    </div>

    <!-- Login Form -->


    <br>
    <form method="POST" action="controlle/controle_login.php">
      <input type="text" class="fadeIn second" name="email" placeholder="email">
      <input type="text" class="fadeIn second" name="senha" placeholder="senha">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

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