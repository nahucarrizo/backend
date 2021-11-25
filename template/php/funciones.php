<?php
    function mostrarProductos(){
        $productos = [
            ['id' => 1, 'nombre' => 'Papas Fritas', 'precio' => 100, 'imagen' => 'img/papas-fritas.png'],
            ['id' => 2, 'nombre' => 'Ensalada', 'precio' => 300, 'imagen' => 'img/ensalada.png'],
            ['id' => 3, 'nombre' => 'Pizza', 'precio' => 500, 'imagen' => 'img/pizza.png'],
            ['id' => 4, 'nombre' => 'Sandwich', 'precio' => 300, 'imagen' => 'img/sandwich.png'],
            ['id' => 5, 'nombre' => 'Hamburguesa', 'precio' => 350, 'imagen' => 'img/hamburguesa.png'],
            ['id' => 6, 'nombre' => 'Galletitas', 'precio' => 200, 'imagen' => 'img/galletitas.png'],
            ['id' => 7, 'nombre' => 'Pancho', 'precio' => 200, 'imagen' => 'img/pancho.png'],
            ['id' => 8, 'nombre' => 'Donas', 'precio' => 100, 'imagen' => 'img/dona.png'],
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

    function traerCarrito(){
        $conexion = conectar();
        $sql = "SELECT * FROM carritos";
        $result = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $carrito[] = $row;
            }
        }
        else{
            echo "Carrito vacio";
        }
        return $carrito;
    }
?>