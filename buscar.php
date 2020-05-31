<?php
 //incluir conexión a la base de datos
 include "config/conexionBD.php";
 $cedula = $_GET['cedula'];
 //echo "Hola " . $cedula;

 $sql = "SELECT * FROM usuarios WHERE usu_correo='$cedula' or usu_cedula='$cedula'";
//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo " <table style='width:100%'>
 <tr>
 <th style='color:black'>Cedula</th>
 <th style='color:black'>Nombres</th>
 <th style='color:black'>Apellidos</th>
 <th style='color:black'>Dirección</th>
 <th style='color:black'>Correo</th>
 <th style='color:black'>Fecha Nacimiento</th>
 <th style='color:black'></th>
 <th style='color:black'></th>
 <th style='color:black'></th>
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td style='color:black' >" . $row['usu_cedula'] . "</td>";
 echo " <td style='color:black'>" . $row['usu_nombres'] ."</td>";
 echo " <td style='color:black'>" . $row['usu_apellidos'] . "</td>";
 echo " <td style='color:black'>" . $row['usu_direccion'] . "</td>";
 echo " <td style='color:black'>" . $row['usu_correo'] . "</td>";
 echo " <td style='color:black'>" . $row['usu_fecha_nacimiento'] . "</td>";
 echo "</tr style='color:black'>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close(); 