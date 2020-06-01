<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <?php

    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    //include 'http://localhost/PROYECTS/P4_JPelaez/Practica04-Mi-Agenda-Telef-nica/config/conexionBD.php';
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

    //Ingresar los campos la base de datos 
    $sql = "INSERT INTO usuarios VALUES (0, '$cedula', '$nombres', '$apellidos', '$direccion','$correo', MD5('$contrasena'),'$fechaNacimiento',null, 'N', null)";
    if ($conn->query($sql) === TRUE) {
        header("location:../../admin/vista/usuario/indexA.html");
    } else {
        if($conn->errno == 1062){
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
        }else{

            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
 //cerrar la base de datos
    $conn->close();
    ?>
    
</body>
</html>