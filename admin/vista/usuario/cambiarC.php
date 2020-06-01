<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Listar Usuarios</title>
    <meta name="keywords" content="Mi Agenda Telefonica" />
    <link rel="stylesheet" type="text/css" href="../../../css/listar.css">
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
                <li><a href="eliminarU.php" target="_blank">Eliminar Usuarios</a></li>
                <li><a href="agregarTel.php" target="_blank">AgregarTelefono</a></li>
                <li><a href="" target="_blank">Cambiar Contraseña</a></li>
            </ul>
    </nav>

    <table style="width:100%">
    <tr>
    <th>Cedula</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Dirección</th>
    <th>Correo</th>
    <th>Fecha Nacimiento</th>
    <th>Cambiar Password</th>
    </tr>
    <?php
    $correo = $_GET['correo'];
    $sql = "SELECT *
    FROM usuarios 
    Where usuarios.usu_correo='$correo' ";

    include '../../../config/conexionBD.php';
    
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
        echo " <td> <a href='modificarC.php?codigo=" . $row['usu_codigo'] . "'>Modificar</a> </td>";
        //echo " <td>" . $row['tel_numero'] . "</td>";
       // echo " <td>" . $row['tel_tipo'] . "</td>";
        //echo " <td>" . $row['tel_operadora'] . "</td>";
        echo "</tr>";
        }
    } else {

        echo "<tr>";
        echo " <td colspan='9'> No existen usuarios registradas en el sistema </td>";
        echo "</tr>";
        }

        $conn->close();
    ?>
    </table>
</body>
</html>