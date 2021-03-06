<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="Mi Agenda Telefonica" />
    <link rel="stylesheet" type="text/css" href="../../../css/crearU.css">
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
                <button><a href="indexA.html" >Iniciar Sesion</a></button>
            </div>
        </div>  
    </header>
    
    <section class="secciones">
        <hr><hr>
        <form id="formulario01" method="POST" action="../../../public/controladores/crear_usuario.php" >
        <h2> Registrarse </h2>
        <br><br>
        <label for="cedula">Cedula: </label><br>
        <input type="text" id="cedula" name="cedula" value="" placeholder="Ingrese el número de cedula ..." onkeyup="validarCedula(this)" required />
        <div id="mensaje1" class="mensaje"></div>
        <br>
        <label for="nombres">Nombres: </label><br>
        <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres..." onkeyup="validarLetras(this)" required/>
        <div id="mensaje2" class="mensaje"></div>
        <br>
        <label for="apellidos">Apelidos: </label><br>
        <input type="text" id="apellidos" name="apellidos" value="" placeholder="Ingrese sus dos apellidos..."  onkeyup="validarLetras(this)" required/>
        <div id="mensaje3" class="mensaje"></div>
        <br>
        <label for="direccion">Dirección: </label><br>
        <input type="text" id="direccion" name="direccion" value="" placeholder="Ingrese su dirección ..." required/>
        <div id="mensaje4" class="mensaje"></div>
        <br>
        <label for="fecha">Fecha Nacimiento: </label><br>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" placeholder="Ingrese su fecha de nacimiento ..." required/>
        <div id="mensaje5" class="mensaje"></div>
        <br>
        <label for="correo">Correo electrónico: </label><br>
        <input type="email" id="correo" name="correo" value="" placeholder="Ingrese su correo electrónico..." onkeyup="validarEmail(this)" required/>
        <div id="mensaje6" class="mensaje"></div>
        <br>
        <label for="correo">Contraseña: </label><br>
        <input type="password" id="contrasena" name="contrasena" value="" placeholder="Ingrese su contraseña ..." onkeyup="validarPassword(this)" required/>
        <div id="mensaje7" class="mensaje"></div>
        <br>
        <input type="submit" id="crear" name="crear" value="Aceptar" />
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
        </form>
</section>

 <footer>
    <hr><hr>
    <div class="footer1">
        <div id="caja3">
            <a href="https://www.wizardingworld.com/"><img src="../../../imagenes/face.jpg"  width="50" height="50" alt="Imagen de Portada" ></a>
        </div>
        <div id="caja4">        
            <a href="https://www.instagram.com/harrypotterfilm/"><img src="../../../imagenes/insta.jpg"  width="50" height="50" alt="Imagen de Portada" ></a>
        </div>
        <div class="footer2">
            <img src="../../../imagenes/logoF.jpg"  width="190" height="100" alt="Imagen de Portada">
        </div>
    </div>

    <div class="info1">
        <h3>Informaci&oacute;n</h3>
        <p>&#8226; Nombre: Diana Fernanda Tixi Uyaguari </p><br>
        <p>&#8226; Universidad Polit&eacute;cnica Salesiana </p><br>
        <p>&#8226; Email: <a href="mailto:dtixi@est.ups.edu.ec">dtixi@est.ups.edu.ec</a></p><br>
        <p>&#8226; Call: <a href="tel:+5930998801982">(593) 0998801982</a></p><br>
        <p>&#169;Todos los derechos reservados</p>
    </div>

    <div class="info2">
        <h3>Informaci&oacute;n</h3>
        <p>&#8226; Nombre: Juan Francisco Pelaez Becerra </p><br>
        <p>&#8226; Universidad Polit&eacute;cnica Salesiana </p><br>
        <p>&#8226; Email: <a href="mailto:@est.ups.edu.ec">dtixi@est.ups.edu.ec</a></p><br>
        <p>&#8226; Call: <a href="tel:+5930998801982">(593) 0998801982</a></p><br>
        <p>&#169;Todos los derechos reservados</p>
    </div>

</footer>
 
</body>
</html>