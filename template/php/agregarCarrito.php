<?php 
    include('funciones.php');
    $conexion = conectar();
    $data = $_POST;
    $id = $data['id'];
    $idUsuario = $data['idUsuario'];
    $nombre = $data['nombre'];
    $precio = $data['precio'];
    $imagen = $data['imagen'];
    $sql = "INSERT INTO carritos (idUsuario, idProducto, precio, nombre, imagen)
    VALUES ('$idUsuario', '$id', '$precio', '$nombre', '$imagen')";
    $result = mysqli_query($conexion,$sql);
    return;
?>