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
                        <ul>
                            <li><a href="orden.php">Ordenes de compras</a></li>
                        </ul>
                    </li>
                    <li><a href="">Oulets En Bogota</a>
                        <ul>	
                            <li><a href="kennedy.php">Barrio Kennedy</a></li>
                            <li><a href="barrioChico.php">Barrio Chico</a></li>
                            <li><a href="unicentro.php">Centro Comercial Unicentro</a></li>
                            <li><a href="tunal.php">Centro Comercial Tunal</a></li>
                        </ul>
                    </li>	
                    <li><a href="">Mu&ntilde;ecos de accion</a>
                        <ul>
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
                    precio :51000 $<br>
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