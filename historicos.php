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
                    <li><a href="">Mu&ntilde;ecos historicos</a>
                        <ul>
                            <li><a href="accion.php">Mu&ntilde;ecos de accion</a></li>
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