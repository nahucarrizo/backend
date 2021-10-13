<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('php\head.php') ?>
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
                <form>
                  <input type="text" class="form-control mb-4" placeholder="Nombre" id="name">
                  <input type="text" class="form-control mb-4" placeholder="Teléfono" id="phone">
                  <button type="submit" class="btn btn-login btn-block">Ingresar</button>
                </form>
            </div>
          </div>


        </div>
    </header>
    <!-- footer -->
    <?php 
      include ('php/footer.php'); 
      include('php.scripts.php');
    ?>   
</body>
</html>
