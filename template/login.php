<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('php/head.php') ?>
</head>
<body id="page-top">
    <!-- Navigation-->
    <?php include('php/navbar.php') ?>
    <!-- Masthead-->
    <header class="masthead-login">
        <div class="container d-flex h-100 align-items-center">
          <div class="col-4">
            <div class="text-left">
                <h1 class="my-0 txt-black mb-4">login</h1>
                <form method="POST" action="php/auth.php">
                  <input type="email" class="form-control mb-4" name="email" placeholder="Email" id="email">
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
