<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    include('php\head.php');
    include('php/funciones.php');
    $carrito = traerCarrito();
  ?>
</head>
<body id="page-top">
  <!-- Navigation-->
  <?php include('php/navbar.php') ?>
  <!-- Carrito-->
  <section class="carrito-section" id="carrito">
    <div class="container">
      <div class="row mx-auto text-center">
        <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i>carrito de compras</h3>
      </div>
      <div class="row">
        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th class="col-6 text-left">producto</th>
                <th class="col-1 text-center">cantidad</th>
                <th class="col-2 text-center">precio</th>
                <th class="col-2 text-center">subtotal</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($carrito as $item): ?>
              <tr>
                <td class="align-middle text-left"><?php echo $item['nombre'];?></td>
                <td class="align-middle text-center">
                  <input type="number" class="form-control" id="cantidad" placeholder="01">
                </td>
                <td class="align-middle text-center"><span id="precio"><?php echo $item['precio'];?></span></td>
                <td class="align-middle text-center">$<span id="subtotal"><?php echo $item['precio'];?></span></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row justify-content-end">
      <button class="btn btn-comprar">Iniciar compra</button>
      </div>
    </div>
  </section>
  <!-- footer -->
  <?php include ('php/footer.php') ?>
  <div class="fluid-container img-footer"></div>
  <?php include('php/scripts.php') ?>
</body>
</html>