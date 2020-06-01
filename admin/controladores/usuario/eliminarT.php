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
 $numero = $_POST["numero"];

 //Si voy a eliminar físicamente el registro de la tabla
$sql = "DELETE FROM telefonos WHERE tel_numero = '$numero'";
 if ($conn->query($sql) === TRUE) {
    header("location:../../vista/usuario/indexU.php");
 } else {
 echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
 }
 $conn->close();
?>
</body>
</html>