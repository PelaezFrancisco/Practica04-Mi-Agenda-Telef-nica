<!DOCTYPE html>
<html lang="es">

<head>
    <title>IndexAdmin</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="Mi Agenda Telefonica" />
    <link rel="stylesheet" type="text/css" href="../../../css/indexU.css">
    <script src="buscar.js" type="text/javascript" ></script>
<!--    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">-->
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
                <button><a href="../../../public/vista/login.html" >Cerrar Sesion</a></button>
            </div>
        </div>  
    </header>

    <table style="width:100%">
    <br> <hr>
    <br>
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </tr>
    <?php
    $correo = $_GET['correo'];
    include '../../../config/conexionBD.php';
        echo "<tr>";
        echo " <td> <a href='modificarU.php?correo=$correo'>Modificar Datos</a> </td>";
        echo " <td> <a href='eliminar.php?correo=$correo'>EliminarUsuario</a> </td>";
        echo " <td> <a href='cambiarC.php?correo=$correo'>CambiarContrasena</a> </td>";
        echo " <td> <a href='agregarTel.php?correo=$correo'>AgregarTelefono</a> </td>";
        echo " <td> <a href='modificarTel.php?correo=$correo'>ModificarTelefono</a> </td>";
        echo " <td> <a href='eliminarT.php?correo=$correo'>EliminarTelefono</a> </td>";
        echo " <td> <a href='buscarT.php?correo=$correo'>BuscarTelefono</a> </td>";
        echo " <td> <a href='listarTel.php?correo=$correo'>ListarTelefono</a> </td>";
        echo "</tr>";            
        $conn->close();
    ?>
 
    </table>
                

        <aside >
            <hr>
            <img src="../../../imagenes/portada.jpg" width="700" height="250" >
        </aside>

        <section class="secciones">
        <hr>
            <h1>Agenda Telefonica</h1>
            <article>
            <br>
            <p>Los directorios telefónicos eran, originalmente, libros o revistas 
                brindados por las empresas telefónicas, ayuntamientos, etc.
                En los cuales figuran los números de los abonados en un área geográfica determinada. 
                <br><br>
                Disponen a su vez, de teléfonos de interés público, como policía, bomberos, 
                hospitales, protección civil, atención al drogodependiente, etc. Actualmente, 
                se distribuyen también en formato electrónico e Internet.
                Las guías contienen por orden alfabético, los nombres, la dirección postal y el 
                teléfono de aquellos abonados a líneas de teléfono que autorizan ser publicados 
                en la guía. En España se las conocía como Páginas Blancas, aunque actualmente existen 
                diferentes servicios que ofrecen la misma función
            </p>
            </article>
        </section>
        
        <section class="secciones1"> <hr>
            <h2>Buscar Contacto</h2>
            <form method="POST" onsubmit="return buscarPorCedula()" >
                <label>Buscar por:  </label> &nbsp; &nbsp; 
                <input type="radio" name="busqueda" value="h">&nbsp; &nbsp; <label> Cedula </label> &nbsp; &nbsp;
                <input type="radio" name="busqueda" value="m"> &nbsp;&nbsp; <label>Correo Electronico </label>  &nbsp; &nbsp; 
                <br><br>
                <input type="text" id="cedula" name="cedula" value=""> <br>
                <br>
                <input type="button" id="busc" name="buscar" value="Buscar" onclick="buscarPorCedula()" />
                <br><br>
            </form>
            
        <div id="informacion"></div>
        </section>

        <section class="secciones1">
            <hr>
            <article class="articulos">
                <h3>Paginas Amarillas</h3>
                <p>En muchos países las páginas amarillas se refieren a una guía telefónica 
                    para empresas organizadas según el tipo de producto o servicio. 
                    <br>Tal y como el nombre sugiere, en la mayoría de los casos la apariencia 
                    es la de un libro grueso cuyas páginas contienen fondo amarillo. 
                    Las Páginas Amarillas también pueden consistir en una base de datos de 
                    información electrónica que contiene el nombre de empresas.<br>
                    Las páginas amarillas se suelen publicar en varios tomos de papel 
                    (depende de la población de la zona) cada año y se distribuye gratuitamente
                    en todas las residencias y lugares de negocios de una cierta área (generalmente 
                    una ciudad o comarca). La mayoría de los listados se presentan en letra pequeña 
                    de color negro y tienen mucha publicidad.
                    <br>Los editores de las páginas amarillas negocian los valores añadidos que 
                    proporcionan tales como el empleo de una fuente de texto mayor para resaltar el 
                    contenido, o mediante el empleo de reclamos publicitarios en los listados por 
                    categoría. Desde mediados de los años 1990, con la introducción de la impresión a 
                    cuatro colores, los anuncios publicitarios se empezaron a realizar en color.
                    Actualmente, las páginas amarillas se publican de forma digital en internet 
                </p>
                <div>
                    <img src="../../../imagenes/pagA.png" width="300" height="300">
                </div>
            </article>
            
            <article class="articulos">
                <h3>Paginas Blancas</h3>
                <p>En muchos países, las páginas blancas se refieren a una guía telefónica que incluye 
                    por orden alfabético a todos los abonados, incluyendo empresas y particulares con 
                    una o varias líneas telefónicas. Dependiendo de la densidad de población, las 
                    ciudades más grandes suelen imprimir más de un tomo para el listado.<br>
                    Las Páginas Blancas también pueden consistir en una base de datos de información 
                    electrónica que contiene el nombre de sus usuarios y sus direcciones electrónicas 
                    asociadas, de la misma forma que un directorio telefónico.<br> La Páginas blancas 
                    electrónicas normalmente contienen información adicional, como la localización de 
                    la oficina, número de teléfono, y correo electrónico, y sus contenidos están 
                    determinados por un esquema de páginas bla UIncas.
                </p>
                <div>
                    <img src="../../../imagenes/pagB.jpg" width="300" height="300">
                </div>
            </article>
        </section>

        <section class="secciones1">
            <hr>
            <h2>Colaboradores</h2>
            <div id="caja1">
                <br>
                <img class="img" id="img1" src="../../../imagenes/colab1.png" width="200" height="200">
                <br><br>
                <button class="botones">Juan Francisco Peláez Becerra</button> 
            </div>

            <div id="caja2">
                <img class="img" id="img1" src="../../../imagenes/colab2.jpg" width="200" height="210">
                <br><br>
                <button class="botones">Diana Fernanda Tixi Uyaguari</button> 
            </div> 
        </section>
        

        <footer>
            <hr>
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