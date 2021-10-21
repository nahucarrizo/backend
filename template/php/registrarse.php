<?php 
    include('funciones.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conexion = conectar();
        $sql = "INSERT INTO usuarios (nombre, apellido, email, password) 
            VALUES ('$nombre', '$apellido', '$email', '$password')";
        $result = mysqli_query($conexion,$sql);
        header("Location: ../index.php");
    }
?>