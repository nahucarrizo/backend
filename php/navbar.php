<?php session_start() ?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo.png" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#productos">productos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">contacto</a></li>
                <?php if(isset($_SESSION['usuario'])){ ?>
                   <li class="nav-item nav-link js-scroll-trigger"><?php echo $_SESSION['usuario']; ?></li> 
                   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="php/logout.php">Salir</a></li>
                <?php }
                else { ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">ingresar</a></li>
                <?php } ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-basket"></i></a></li>
            </ul>
        </div>
    </div>
</nav>