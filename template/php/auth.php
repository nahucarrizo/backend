<?php
    include('funciones.php');
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conexion = conectar();
    $sql = "SELECT * from usuarios where (('$email' = email) and ('$password' = password))";
    $result = mysqli_query($conexion,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['userename'] = $email;
        header("Location: ../index.php");
    }
    else{
        echo "Usuario o clave incorrecta";
    }
?>