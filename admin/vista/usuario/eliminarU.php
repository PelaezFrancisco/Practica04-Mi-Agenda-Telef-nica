<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Eliminar Usuarios</title>
    <meta name="keywords" content="Mi Agenda Telefonica" />
    <link rel="stylesheet" type="text/css" href="../../../css/eliminar.css">
</head>
<body>
    <header >
        <div id="encabezado">  
            <div id="logo1">
                <img src="../../../imagenes/logoF.jpg"  width="250" height="150" alt="Imagen de Portada" >
            </div>
            <div id="buscar">
                <form method="get" action="https://www.google.com/search">
                <input title="busqueda" name="q" type="text" class="floatright" id="cajabusqueda" value="" size="31" 
                 maxlength="255">
                <input name="botonbusq" type="submit" class="floatright" id="botonbusqueda" value="Buscar">
                </form> 	
            </div>  
            <div id="info">
                <a href="tel:+5930998801982"><img src="../../../imagenes/contacto.png"  width="50" height="50" alt="Correo electronico" ></a>
                <a href="mailto:dtixi@est.ups.edu.ec"><img src="../../../imagenes/sobre.jpg"  width="50" height="50" alt="Contactos Telefonico" ></a>
                <button><a href="public/vista/login.html" target="_blank">Iniciar Sesion</a></button>
            </div>
        </div>  
    </header>
    <nav>
            <ul class="menu_h">
                <li><a href="agregar.php" target="_blank">Agregar Usuarios</a></li>
                <li><a href="modificarU.php" target="_blank">Modificar Usuarios</a></li>
                <li><a href="listar.php" target="_blank">Listar Usuarios</a></li>
                <li><a href="agregarTel.php" target="_blank">Add Telefono Usuarios</a></li>
                <li><a href="" target="_blank">Cambiar Contraseña</a></li>
            </ul>
    </nav>

    <form method="POST" action="../../controladores/usuario/eliminar.php" >
    <br>
    <hr>
    <br>
        <h2>Eliminar Usuario</h2><br>
        <label>Ingrese la cedula:  </label> &nbsp; &nbsp; 
        <input type="text" id="cedula" name="cedula" value=""> <br>
        <br>
        <input type="submit" id="eliminar" name="eliminar" value="Eliminar" />
        <br><br>
    </form>

    <table style="width:100%">
    <tr>
    <th>Cedula</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Dirección</th>
    <th>Correo</th>
    <th>Fecha Nacimiento</th>
    </tr>
    <?php

    include '../../../config/conexionBD.php';
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo " <td>" . $row["usu_cedula"] . "</td>";
        echo " <td>" . $row['usu_nombres'] ."</td>";
        echo " <td>" . $row['usu_apellidos'] . "</td>";
        echo " <td>" . $row['usu_direccion'] . "</td>";
        echo " <td>" . $row['usu_correo'] . "</td>";
        echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
        echo "</tr>";
        }
    } else {

        echo "<tr>";
        echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
        echo "</tr>";
        }

        $conn->close();
    ?>
    </table>
</body>
</html>