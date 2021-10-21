<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('php/head.php') ?>
</head>
<body id="page-top">
    <?php include ('php/navbar.php') ?>
    <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4">Registrarse</h1>
                    <form method="POST" action="php/registrarse.php">
                        <input type="text" class="form-control mb-4" name="nombre" placeholder="Nombre" id="nombre">
                        <input type="text" class="form-control mb-4" name="apellido" placeholder="Apellido" id="apellido">
                        <input type="email" class="form-control mb-4" name="email" placeholder="Email" id="email"> 
                        <input type="password" class="form-control mb-4" name="password" placeholder="Contraseña" id="password">
                        <button type="submit" class="btn btn-login btn-block">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <?php 
      include ('php/footer.php'); 
      include('php/scripts.php');
    ?>
</body>
</html>