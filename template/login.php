<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('php/head.php') ?>
</head>
<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo.png" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-basket"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Masthead-->
    <header class="masthead-login">
        <div class="container d-flex h-100 align-items-center">
          <div class="col-4">
            <div class="text-left">
                <h1 class="my-0 txt-black mb-4">login</h1>
                <form method="POST" action="php/auth.php">
                  <input type="text" class="form-control mb-4" name="usuario" placeholder="Usuario" id="usuario">
                  <input type="password" class="form-control mb-4" name="password" placeholder="Constraseña" id="password">
                  <button type="submit" class="btn btn-login btn-block">Ingresar</button>
                </form>
                <button type="submit" class="btn btn-login btn-block mt-1">
                    <a href="register.php" class="text-white">Registrarse</a>
                </button>
            </div>
          </div>
        </div>
    </header>
    <!-- footer -->
    <?php 
      include ('php/footer.php'); 
      include ('php/scripts.php');
    ?>   
</body>
</html>
