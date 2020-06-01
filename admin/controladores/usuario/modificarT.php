<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Modificar Telefonos </title>
</head>
<body>
<?php
 //incluir conexión a la base de datos
 include '../../../config/conexionBD.php';
 $codigo = $_POST["codigo"];
 $numero = isset($_POST["tel"]) ? trim($_POST["tel"]) : null;
 $tipo = isset($_POST["tipo"]) ? mb_strtoupper(trim($_POST["tipo"]), 'UTF-8') : null;
 $operadora = isset($_POST["operador"]) ? mb_strtoupper(trim($_POST["operador"]), 'UTF-8') : null;
 
 $sql = "UPDATE telefonos " .
 "SET tel_numero = '$numero', " .
 "tel_tipo = '$tipo', " .
 "tel_operadora = '$operadora', " .
  
 "WHERE tel_codigo = $codigo";

 if ($conn->query($sql) === TRUE) {
    header("location:../../vista/usuario/indexU.php");
 } else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
 }
 $conn->close();
?>
</body>
</html>