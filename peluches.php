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
                    <li><a href="">Peluches</a>
                        <ul>
                            <li><a href="accion.php">Mu&ntilde;ecos de accion</a></li>
                            <li><a href="historicos.php">Mu&ntilde;ecos historicos</a></li>
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

                    <img src="./imagenes/peluche1.jpg"><br>
                    Nombre : Peluche 1<br>
                    precio :52556 $<br>
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
                    precio :144754 $<br>
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
                    precio :14569 $<br>
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
                    precio :412588 $<br>
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