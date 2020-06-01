<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Modificar datos de persona </title>
</head>
<body>
<?php
 //incluir conexión a la base de datos
 include '../../../config/conexionBD.php';
 $codigo = $_POST["codigo"];
 $contrasena1 = isset($_POST["contrasena1"]) ? trim($_POST["contrasena1"]) : null;
 $contrasena2 = isset($_POST["contrasena2"]) ? trim($_POST["contrasena2"]) : null;
 date_default_timezone_set("America/Guayaquil");
 $fecha = date('Y-m-d H:i:s', time());
 $sqlContrasena2 = "UPDATE usuarios " .
 "SET usu_password =MD5('$contrasena2'), " .
 "usu_fecha_modificacion = '$fecha' " .
 "WHERE usu_codigo = $codigo";

 if ($conn->query($sqlContrasena2) === TRUE) {
    header("location:../../vista/usuario/indexu.php");
 } else {
 echo "<p>Error: " . mysqli_error($conn) . "</p>";
 }
 $conn->close();
?>
</body>
</html>