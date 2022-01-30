<?php 
    include('funciones.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if ($password1 == $password2){
            $conexion = conectar();
            $sql = "INSERT INTO usuarios (nombre, apellido, usuario, email, password) 
                VALUES ('$nombre', '$apellido', '$usuario', '$email', '$password1')";
            $result = mysqli_query($conexion,$sql);
            header("Location: ../index.php");
        }
        else {
            echo "Claves incorrectas";
        }
    }
?>