<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Eliminar datos de persona </title>
</head>
<body>
<?php
 //incluir conexión a la base de datos
 include '../../../config/conexionBD.php';
 $cedula = $_POST["cedula"];

 //Si voy a eliminar físicamente el registro de la tabla
$sql = "DELETE FROM usuarios WHERE usu_cedula = '$cedula'";
 if ($conn->query($sql) === TRUE) {
    header("location:../../vista/usuario/listar.php");
 } else {
 echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
 }
 $conn->close();
?>
</body>
</html>