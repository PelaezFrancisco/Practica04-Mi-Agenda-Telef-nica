<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Modificar datos de persona</title>
 <link rel="stylesheet" type="text/css" href="../../../css/cambiarC.css">
 <script src="../../../javascript/formulario.js" type="text/javascript" ></script>
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
                <button><a href="../../index.html" >Iniciar Sesion</a></button>
            </div>
        </div>  
    </header>
    <nav>
            <ul class="menu_h">
                <li><a href="agregar.php" target="_blank">Agregar Usuarios</a></li>
                <li><a href="listar.php" target="_blank">Listar Usuarios</a></li>
                <li><a href="eliminarU.php" target="_blank">Eliminar Usuarios</a></li>
                <li><a href="agregarTel.php" target="_blank">Add Telefonos</a></li>
                <li><a href="" target="_blank">Cambiar Contraseña</a></li>

            </ul>
    </nav>
    
<?php
 $codigo = $_GET["codigo"];
 ?>
 <form id="formulario01" method="POST" action="../../controladores/usuario/cambiar_contrasena.php">
 <h2>Cambiar Contraseña</h2><br><br>
 <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
 <label >Contraseña Actual </label><br><br>
 <input type="password" id="contrasena1" name="contrasena1" value="" required
placeholder="Ingrese su contraseña actual ..."/>
 <br><br>
 <label  >Contraseña Nueva </label><br><br>
 <input type="password" id="contrasena2" name="contrasena2" value="" required
placeholder="Ingrese su contraseña nueva ..."/>
 <br><br>
 <input type="submit" id="modificar" name="modificar" value="Modificar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />

</body>
</html>