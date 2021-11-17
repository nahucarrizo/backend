<?php
    function mostrarProductos(){
        $productos = [
            ['nombre' => 'Papas Fritas', 'precio' => 100, 'imagen' => 'img/papas-fritas.png'],
            ['nombre' => 'Ensalada', 'precio' => 300, 'imagen' => 'img/ensalada.png'],
            ['nombre' => 'Pizza', 'precio' => 500, 'imagen' => 'img/pizza.png'],
            ['nombre' => 'Sandwich', 'precio' => 300, 'imagen' => 'img/sandwich.png'],
            ['nombre' => 'Hamburguesa', 'precio' => 350, 'imagen' => 'img/hamburguesa.png'],
            ['nombre' => 'Galletitas', 'precio' => 200, 'imagen' => 'img/galletitas.png'],
            ['nombre' => 'Pancho', 'precio' => 200, 'imagen' => 'img/pancho.png'],
            ['nombre' => 'Donas', 'precio' => 100, 'imagen' => 'img/dona.png'],
        ];
        return ($productos);
    }

    function conectar(){
        $server = "127.0.0.1";
        $user = "root";
        $pass = "root";
        $bd = "curso_backend";
        $con = mysqli_connect($server, $user, $pass, $bd) or die ("Error al conectar la base de datos".mysqli_error());
        return $con;
    }
?>