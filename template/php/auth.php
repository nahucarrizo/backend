<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('funciones.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conexion = conectar();
            $sql = "SELECT * from usuarios";
            $result = mysqli_query($conexion,$sql);
            while($row = mysqli_fetch_array($result) || !$result ){
                ?>
                <h1> <?php echo $row ['nombre'] ?> </h1>
                <?php
                }
                ?>
        <?php } ?>
</body>
</html>