<?php
    include('funciones.php');
    if (!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conexion = conectar();
        $sql = "SELECT * from usuarios where (('$email' = email) and ('$password' = password))";
        $result = mysqli_query($conexion,$sql);
        if(mysqli_num_rows($result) > 0){
            $usuario = mysqli_fetch_assoc($result);
            $_SESSION['usuario'] = $usuario["usuario"];
            header("Location: ../index.php");
        }
        else{
            echo "Usuario o clave incorrecta";
        }
    }
?>