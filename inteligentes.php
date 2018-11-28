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
                    <li><a href="">Mu&ntilde;ecos inteligentes</a>
                        <ul>
                            <li><a href="accion.php">Mu&ntilde;ecos de accion</a></li>
                            <li><a href="historicos.php">Mu&ntilde;ecos historicos</a></li>
                            <li><a href="peluches.php">Peluches</a></li>
                        </ul>
                    </li>	
                </ul>
            </div>
        </nav>

        <section class="section">
            <div class="section_container">
                <!--Productos-->             
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