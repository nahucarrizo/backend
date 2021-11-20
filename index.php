<?php
  include('php/funciones.php');
  $productos = mostrarProductos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('php\head.php') ?>
</head>
<body id="page-top">
  <!-- Navigation-->
  <?php include('php/navbar.php') ?>
  <!-- Masthead-->
  <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="col-6 mx-auto">
          <div class="text-left">
              <h1 class="my-0">Comprá online desde tu casa.</h1>
              <h2 class="mt-3 mb-5">¡Nosotros te lo llevamos!</h2>
          </div>
        </div>
        <div class="col-6">
          <img src="img/hero.png"/>
        </div>

      </div>
  </header>
  <!-- Productos-->
  <section class="productos-section" id="productos">
      <div class="container">
          <div class="row mx-auto text-center">
            <div class="col-lg-8 mx-auto">
                <h3 class="mb-4">nuestros productos</h3>
            </div>
          </div>
          <div class="row align-items-end">
            <?php foreach($productos as $producto): ?>
            <div class="col-xl-3 col-6 mt-4">
              <div class="producto text-center p-4">
                <img src="<?php echo $producto['imagen'] ?>" />
                <h4 class="text-left"><?php echo $producto['nombre'] ?></h4>
                <h5 class="text-left">$<?php echo $producto['precio'] ?></h5>
                <button class="btn btn-agregar">Agregar</button>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
      </div>
  </section>  
  <!-- Contacto-->
  <?php 
    include ('php/footer.php'); 
    include('php/scripts.php');
  ?>
  
</body>
</html>