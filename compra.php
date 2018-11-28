<html>
    <head>
        <title>DAC shopping</title>
		<meta charset='utf-8'>
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

        <section class="section_deta">
            <!--formulario--------------------------------------------------------------------------------------------------------------------------->
            <form method="post" action="orden.php">
                <center>
                    <!---->
                    <?php

                    if($_POST['id']==""){
                        echo "A OCURRIDO UN ERROR";
                    }
                    include 'conexion.php';
                    $variable_id = $_POST['id'];
                    $re=mysql_query("select * from productos where id=".$variable_id)or die(mysql_error());
                    while ($f=mysql_fetch_array($re)) {
                    ?>
                    <?php
                        $nombre=$f['nombre'];
                        $cantidad=$_POST['cantidad'];
                        $precio=$f['precio'];
						$
						if($variable_id == 1){ $cant1 = $cantidad;
                                            $consulta="Update productos set cantidad  ='.$cant1'. where  id=".$variable_id;
                                            $resultado = mysqli_query( $conexion, $consulta );
						}else if($variable_id == 2){ $cant2 = $cantidad; 
						}else if($variable_id == 3){ $cant3 = $cantidad; 
						}else if($variable_id == 4){ $cant4 = $cantidad; 
						}else if($variable_id == 5){ $cant5 = $cantidad; 
						}else if($variable_id == 6){ $cant6 = $cantidad; 
						}else if($variable_id == 7){ $cant7 = $cantidad; 
						}else if($variable_id == 8){ $cant8 = $cantidad; 
						}else if($variable_id == 9){ $cant9 = $cantidad; 
						}else if($variable_id == 10){ $cant10 = $cantidad; 
						}else if($variable_id == 11){ $cant11 = $cantidad; 
						}else if($variable_id == 12){ $cant12 = $cantidad; 
						}else if($variable_id == 13){ $cant13 = $cantidad; 
						}else if($variable_id == 14){ $cant14 = $cantidad; 
						}else if($variable_id == 15){ $cant15 = $cantidad; 
						}else if($variable_id == 16){ $cant16 = $cantidad; 
						}else if($variable_id == 17){ $cant17 = $cantidad; 
						}else if($variable_id == 18){ $cant18 = $cantidad; 
						}else if($variable_id == 19){ $cant19 = $cantidad; 
						}else if($variable_id == 20){ $cant20 = $cantidad; 
						}
                    ?>
					
                    <center><table border="solid">
					<tr>
                      <td>NOMBRE : <input type="text" name="nombreee"><br>
                      APELLIDO : <input type="text" name="apellido"><br>
                      TELEFONO : <input type="text" name="telefono"><br>
                      CEDULA : <input type="text" name="cedula"><br>
                      DIRECCION : <input type="text"><br>
                      CODIGO POSTAL : <input type="text" name="codigoP"><br>
                      CANTIDAD DE Transformers : <?php include 'conexion.php';
                                                 $re=mysql_query("select cantidad from productos where id=".$variable_id)or die(mysql_error());?><br>
                      CANTIDAD DE MaxSteel : <?php echo $cant2;?><br>
					  CANTIDAD DE Sasuke: <?php echo $cant3;?><br>
					  CANTIDAD DE Kakashi: <?php echo $cant4;?><br>
					  CANTIDAD DE Naruto: <?php echo $cant5;?><br>
					  CANTIDAD DE Guerrero historico 1: <?php echo $cant6;?><br>
					  CANTIDAD DE Guerrero historico 2: <?php echo $cant7;?><br>
					  CANTIDAD DE Guerrero historico 3: <?php echo $cant8;?><br> 
					  CANTIDAD DE Guerrero historico 4: <?php echo $cant9;?><br>
					  CANTIDAD DE Guerrero historico 5: <?php echo $cant10;?><br>
					  CANTIDAD DE Muñeco tecnologico 1: <?php echo $cant11;?><br>
					  CANTIDAD DE Muñeco tecnologico 2: <?php echo $cant12;?><br>
					  CANTIDAD DE Muñeco tecnologico 3: <?php echo $cant13;?><br>
					  CANTIDAD DE Muñeco tecnologico 4: <?php echo $cant14;?><br>
					  CANTIDAD DE Muñeco tecnologico 5: <?php echo $cant15;?><br>
					  CANTIDAD DE Peluche 1: <?php echo $cant16;?><br>
					  CANTIDAD DE Peluche 2: <?php echo $cant17;?><br> 
					  CANTIDAD DE Peluche 3: <?php echo $cant18;?><br>
					  CANTIDAD DE Peluche 4: <?php echo $cant19;?><br>
					  CANTIDAD DE Peluche 5: <?php echo $cant20;?><br>
                    <?php
                        $total=$precio * $cantidad;
                    ?>
                    
                      PRECIO A PAGAR :  <input type="text" name="campo_de_texto" value="<?php echo $total;?>" readonly="readonly" /> <br></td>
                    <?php
                    }
                    ?>
                     </table>
                    <input type="submit" value="ENVIAR-FORMULARIO DE COMPRA">
                </center>
            </form>
            <!--FIN Formulario-------------------------------------------------------------------------------------------------------------------> 

            <!--FIN Productos-->
        </section>

        <footer>
            <div class="pie">
                PIE DE PAGINA ESTO
            </div>

        </footer>


    </body>
</html>