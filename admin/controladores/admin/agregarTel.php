<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IngresarTelefono</title>
</head>
<body>
    <?php

    //incluir conexión a la base de datos
    include '../../../config/conexionBD.php';
    $codigo = $_POST["codigo"];
    $numero = isset($_POST["tel"]) ? trim($_POST["tel"]) : null;
    $tipo = isset($_POST["tipo"]) ? mb_strtoupper(trim($_POST["tipo"]), 'UTF-8') : null;
    $operador = isset($_POST["operador"]) ? mb_strtoupper(trim($_POST["operador"]), 'UTF-8') : null;

    //Ingresar los campos la base de datos 
    $sql = "INSERT INTO telefonos VALUES (0 , '$numero', '$tipo', '$operador', '$codigo')";
    if ($conn->query($sql) === TRUE) {
        header("location:../../vista/admin/indexA.html");
    } else {
        if($conn->errno == 1062){
            echo "<p class='error'>La persona con la cedula ya esta registrada en el sistema </p>";
        }else{

            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
 //cerrar la base de datos
    $conn->close();
    ?>
    
</body>
</html>