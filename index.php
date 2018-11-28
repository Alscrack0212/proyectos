<html>
    <head>
        <title>DAC shopping</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class=logo-container>
                    <h1 class="logo">ACD PROGRAMACION</h1>
                </div> 
                <div class="main-header__contactInfo">
                    <div class="main-header__contactInfo__phone">
                        <span>999-999-999</span> 
                    </div>
                    <div class="main-header__contactInfo__address">
                        <span>calle tal con direccion tal</span> 
                    </div>
                
                </div>
            </div>
        </header>

        <nav class="nav">
            <div class="container1">
                <ul class="lista2">	
                    <li><a href="index.php">Principal</a>
                      
                    </li>
                    <li><a href="">Oulets En Bogota</a>
                        <ul>	
                            <li><a href="kennedy.php">Barrio Kennedy</a></li>
                            <li><a href="barrioChico.php">Barrio Chico</a></li>
                            <li><a href="unicentro.php">Centro Comercial Unicentro</a></li>
                            <li><a href="tunal.php">Centro Comercial Tunal</a></li>
                        </ul>
                    </li>	
                    <li><a href="">Productos</a>
                        <ul>
                            <li><a href="accion.php">Mu&ntilde;ecos de accion</a></li>
                            <li><a href="historicos.php">Mu&ntilde;ecos historicos</a></li>
                            <li><a href="peluches.php">Peluches</a></li>
                            <li><a href="inteligentes.php">Mu&ntilde;ecos inteligentes</a></li>
                        </ul>
                    </li>	
                </ul>
            </div>
        </nav>

        <section class="section">
            <div class="section_container">
  <!--Productos-->             
                <div class="Contenedor_Producto">
                    <img src="./imagenes/accion1.jpg"><br>
                    Nombre : Transformers<br>
                    precio :50000 $<br>
                    descripcion: Jugete<br> 
                    Tipo de muñeco :Accion <br>
                    <!--ESTE FORMULARIOS ES PARA QUE SE DIJIA A DONDE ESTAN LOS DETALLES DE ESTE PRODUCTO-->
                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="1">                        
                        <input type="submit" value="Ver detalles">
                    </form>
                    <!--ESTE FORMULARIOS ES PARA QUE SE DIJIA A DONDE ESTAN LOS DETALLES DE ESTE PRODUCTO CON EL BOTON -->
                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/accion2.jpg"><br>
                    Nombre : MaxSteel<br>
                    precio : 51000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Accion <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="2">                        
                        <input type="submit" value="Ver delalles">
                    </form>
                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/accion3.jpg"><br>
                    Nombre : Sasuke<br>
                    precio :61000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Accion <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="3">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/accion4.jpg"><br>
                    Nombre : Kakashi<br>
                    precio :71000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Accion <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="4">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/accion5.jpg"><br>
                    Nombre : Naruto<br>
                    precio :71000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Accion <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="5">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/historicos1.jpg"><br>
                    Nombre : Guerrero historico 1<br>
                    precio :51000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Historico <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="6">                        
                        <input type="submit" value="Ver delalles">
                    </form>
                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/historicos2.jpg"><br>
                    Nombre : Guerrero historico 2<br>
                    precio :71000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Historico <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="7">                        
                        <input type="submit" value="Ver delalles">
                    </form>

                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/historicos3.jpg"><br>
                    Nombre : Guerrero historico 3<br>
                    precio :900000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Historico <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="8">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/historicos4.jpg"><br>
                    Nombre : Guerrero historico 4<br>
                    precio :100000 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Historico <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="9">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/historicos5.jpg"><br>
                    Nombre : Guerrero historico 5<br>
                    precio :53786 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :Historico <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="10">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/inteligentes1.jpg"><br>
                    Nombre : Muñeco tecnologico 1<br>
                    precio :767678 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :inteligentes <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="11">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/inteligentes2.jpg"><br>
                    Nombre : Muñeco tecnologico 2<br>
                    precio :757585 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :inteligentes <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="12">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/inteligentes3.jpg"><br>
                    Nombre : Muñeco tecnologico 3<br>
                    precio :455454 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :inteligentes <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="13">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/inteligentes4.jpg"><br>
                    Nombre : Muñeco tecnologico 4<br>
                    precio :514584 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :inteligentes <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="14">                        
                        <input type="submit" value="Ver delalles">
                    </form>
                </div>   

                <div class="Contenedor_Producto">

                    <img src="./imagenes/inteligentes5.jpg"><br>
                    Nombre : Muñeco tecnologico 5<br>
                    precio :545284 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :inteligentes <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="15">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/peluche1.jpg"><br>
                    Nombre : Peluche 1<br>
                    precio : 52556 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :peluche <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="16">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/peluche2.jpg"><br>
                    Nombre : Peluche 2<br>
                    precio : 144754 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :peluche <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="17">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>   

                <div class="Contenedor_Producto">

                    <img src="./imagenes/peluche3.jpg"><br>
                    Nombre : Peluche 3<br>
                    precio : 14569 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :peluche <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="18">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/peluche4.jpg"><br>
                    Nombre : Peluche 4<br>
                    precio : 41258 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :peluche <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="19">                        
                        <input type="submit" value="Ver delalles">
                    </form>


                </div>

                <div class="Contenedor_Producto">

                    <img src="./imagenes/peluche5.jpg"><br>
                    Nombre : Peluche 5<br>
                    precio :45826 $<br>
                    descripcion: Jugete<br>
                    Tipo de muñeco :peluche <br>

                    <form action="detallesProductos.php" method="post">
                        <input type="hidden" name="id" value="20">                        
                        <input type="submit" value="Ver delalles">
                    </form>

                </div>	
<!--FIN Productos-->
           </div>
                </section>

        <footer>
            <div class="pie">
                PIE DE PAGINA ESTO
            </div>
            
        </footer>


    </body>
</html>