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
            <!--Accion-->
            <?php

            $variable_id = $_POST['id'];


            $cantidad1="";
            $cantidad2="";
            $cantidad3="";

            $material1="";
            $material2="";
            $material3="";

            $manodeobra1=0;
            $manodeobra2=0;
            $manodeobra3=0;

            $cantidadhoras1=0;
            $cantidadhoras2=0;
            $cantidadhoras3=0;

            $costounitario1=0;
            $costounitario2=0;
            $costounitario3=0;

            $costototal1=0;
            $costototal2=0;
            $costototal3=0;


            if($variable_id==1){
                $cantidad1="15g";
                $material1="Plastico";
                $manodeobra1=10000;
                $cantidadhoras1=2;
                $costounitario1=15000;
                $costototal1=25000;

                $cantidad2="10g";
                $material2="metal";
                $manodeobra2=5000;
                $cantidadhoras2=2;
                $costounitario2=20000;
                $costototal2=25000;

                $cantidad3="3g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=10000;
                $costototal3=20000;

            }else if($variable_id==2){
                $cantidad1="11g";
                $material1="Plastico";
                $manodeobra1=5000;
                $cantidadhoras1=2;
                $costounitario1=10000;
                $costototal1=15000;

                $cantidad2="1g";
                $material2="metal";
                $manodeobra2=10000;
                $cantidadhoras2=2;
                $costounitario2=5000;
                $costototal2=15000;

                $cantidad3="1g";
                $material3="madera";
                $manodeobra3=20000;
                $cantidadhoras3=2;
                $costounitario3=10000;
                $costototal3=30000;

            }else if($variable_id==3){
                $cantidad1="11g";
                $material1="Plastico";
                $manodeobra1=5000;
                $cantidadhoras1=2;
                $costounitario1=10000;
                $costototal1=12000;

                $cantidad2="1g";
                $material2="metal";
                $manodeobra2=18108;
                $cantidadhoras2=2;
                $costounitario2=18107;
                $costototal2=36215;

                $cantidad3="1g";
                $material3="madera";
                $manodeobra3=20000;
                $cantidadhoras3=2;
                $costounitario3=1785;
                $costototal3=21785;

            }else if($variable_id==4){
                $cantidad1="12g";
                $material1="Plastico";
                $manodeobra1=21000;
                $cantidadhoras1=2;
                $costounitario1=5000;
                $costototal1=26000;

                $cantidad2="3g";
                $material2="metal";
                $manodeobra2=6000;
                $cantidadhoras2=2;
                $costounitario2=30000;
                $costototal2=36000;

                $cantidad3="3g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=8000;
                $costototal3=18000;


            }else if($variable_id==5){
                $cantidad1="10g";
                $material1="Plastico";
                $manodeobra1=21000;
                $cantidadhoras1=2;
                $costounitario1=5000;
                $costototal1=55050;

                $cantidad2="2g";
                $material2="metal";
                $manodeobra2=6000;
                $cantidadhoras2=2;
                $costounitario2=30000;
                $costototal2=27400;

                $cantidad3="1g";
                $material3="madera";
                $manodeobra3=3775;
                $cantidadhoras3=2;
                $costounitario3=3775;
                $costototal3=7550;

            }else if($variable_id==6){

                $cantidad2="7g";
                $material2="metal";
                $manodeobra2=6000;
                $cantidadhoras2=2;
                $costounitario2=30000;
                $costototal2=36000;

                $cantidad3="9g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=8000;
                $costototal3=18000;
                $costototal3=0;

                $cantidad1="4g";
                $material1="Plastico";
                $manodeobra1=21000;
                $cantidadhoras1=2;
                $costounitario1=5000;
                $costototal1=26000;

                $cantidad3="9g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=8000;
                $costototal3=18000;
                $costototal3=0;

            }else if($variable_id==7){


                $cantidad2="7g";
                $material2="metal";
                $manodeobra2=6000;
                $cantidadhoras2=2;
                $costounitario2=30000;
                $costototal2=36000;

                $cantidad3="8g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=8000;
                $costototal3=18000;

                $cantidad1="6g";
                $material1="Plastico";
                $manodeobra1=21000;
                $cantidadhoras1=2;
                $costounitario1=5000;
                $costototal1=26000;

            }else if($variable_id==8){
                $cantidad2="7g";
                $material2="metal";
                $manodeobra2=6000;
                $cantidadhoras2=2;
                $costounitario2=30000;
                $costototal2=36000;


                $cantidad1="2g";
                $material1="Plastico";
                $manodeobra1=21000;
                $cantidadhoras1=2;
                $costounitario1=5000;
                $costototal1=26000;


                $cantidad3="9g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=8000;
                $costototal3=18000;

            }else if($variable_id==9){
                $cantidad3="6g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=8000;
                $costototal3=18000;

                $cantidad1="8g";
                $material1="Plastico";
                $manodeobra1=21000;
                $cantidadhoras1=2;
                $costounitario1=5000;
                $costototal1=26000;

                $cantidad2="7g";
                $material2="metal";
                $manodeobra2=6000;
                $cantidadhoras2=2;
                $costounitario2=30000;
                $costototal2=36000;


            }else if($variable_id==10){


                $cantidad2="7g";
                $material2="metal";
                $manodeobra2=6000;
                $cantidadhoras2=2;
                $costounitario2=30000;
                $costototal2=36000;

                $cantidad1="13g";
                $material1="Plastico";
                $manodeobra1=21000;
                $cantidadhoras1=2;
                $costounitario1=5000;
                $costototal1=26000;

                $cantidad3="4g";
                $material3="madera";
                $manodeobra3=10000;
                $cantidadhoras3=2;
                $costounitario3=8000;
                $costototal3=18000;

            }else if($variable_id==11){
                $cantidad1="30cm";
                $material1="cable";
                $manodeobra1=2548;
                $cantidadhoras1=2;
                $costounitario1=2545;
                $costototal1=55050;

                $cantidad2="4";
                $material2="baterias";
                $manodeobra2=0;
                $cantidadhoras2=0;
                $costounitario2=1455;
                $costototal2=27400;

                $cantidad3="5";
                $material3="chips";
                $manodeobra3=3775;
                $cantidadhoras3=2;
                $costounitario3=3775;
                $costototal3=7550;
            }else if($variable_id==12){
                $cantidad1="20cm";
                $material1="cable";
                $manodeobra1=7050;
                $cantidadhoras1=6;
                $costounitario1=600;
                $costototal1=7650;

                $cantidad2="1";
                $material2="baterias";
                $manodeobra2=0;
                $cantidadhoras2=0;
                $costounitario2=3450;
                $costototal2=3450;

                $cantidad3="2";
                $material3="ships";
                $manodeobra3=3600;
                $cantidadhoras3=1;
                $costounitario3=8900;
                $costototal3=12500;

            }else if($variable_id==13){
                $cantidad1="40cm";
                $material1="cable";
                $manodeobra1=5700;
                $cantidadhoras1=3;
                $costounitario1=600;
                $costototal1=6500;

                $cantidad2="2";
                $material2="baterias";
                $manodeobra2=0;
                $cantidadhoras2=0;
                $costounitario2=6500;
                $costototal2=6500;

                $cantidad3="2";
                $material3="ships";
                $manodeobra3=3;
                $cantidadhoras3=10000;
                $costounitario3=5500;
                $costototal3=15500;

            }else if($variable_id==14){
                $cantidad1="18cm";
                $material1="cable";
                $manodeobra1=9500;
                $cantidadhoras1=2;
                $costounitario1=600;
                $costototal1=11000;

                $cantidad2="6";
                $material2="baterias";
                $manodeobra2=10000;
                $cantidadhoras2=4;
                $costounitario2=7600;
                $costototal2=17600;

                $cantidad3="5";
                $material3="ships";
                $manodeobra3=7800;
                $cantidadhoras3=6;
                $costounitario3=8000;
                $costototal3=15800;

            }else if($variable_id==15){
                $cantidad1="1m";
                $material1="cable";
                $manodeobra1=12000;
                $cantidadhoras1=6;
                $costounitario1=600;
                $costototal1=12600;

                $cantidad2="10";
                $material2="baterias";
                $manodeobra2=5000;
                $cantidadhoras2=4;
                $costounitario2=8300;
                $costototal2=13300;

                $cantidad3="8";
                $material3="ships";
                $manodeobra3=8000;
                $cantidadhoras3=5;
                $costounitario3=1100;
                $costototal3=19000;

            }else if($variable_id==16){
                $cantidad1="1Kg";
                $material1="algodon";
                $manodeobra1=2000;
                $cantidadhoras1=3;
                $costounitario1=6000;
                $costototal1=10000;

                $cantidad2="2m";
                $material2="hilo";
                $manodeobra2=6000;
                $cantidadhoras2=4;
                $costounitario2=3500;
                $costototal2=11000;

                $cantidad3="2m";
                $material3="tela";
                $manodeobra3=2600;
                $cantidadhoras3=2;
                $costounitario3=6000;
                $costototal3=10000;

            }else if($variable_id==17){
                $cantidad1="2kg";
                $material1="algodon";
                $manodeobra1=2000;
                $cantidadhoras1=2;
                $costounitario1=5500;
                $costototal1=9000;

                $cantidad2="3m";
                $material2="hilo";
                $manodeobra2=3500;
                $cantidadhoras2=1;
                $costounitario2=4500;
                $costototal2=9200;

                $cantidad3="2m";
                $material3="tela";
                $manodeobra3=4900;
                $cantidadhoras3=2;
                $costounitario3=7000;
                $costototal3=14000;

            }else if($variable_id==18){
                $cantidad1="3kg";
                $material1="algodon";
                $manodeobra1=3200;
                $cantidadhoras1=2;
                $costounitario1=6500;
                $costototal1=11500;

                $cantidad2="2m";
                $material2="hilo";
                $manodeobra2=4700;
                $cantidadhoras2=3;
                $costounitario2=5000;
                $costototal2=10000;

                $cantidad3="2m";
                $material3="tela";
                $manodeobra3=5000;
                $cantidadhoras3=3;
                $costounitario3=5600;
                $costototal3=12000;

            }else if($variable_id==19){
                $cantidad1="1kg";
                $material1="algodon";
                $manodeobra1=3560;
                $cantidadhoras1=5;
                $costounitario1=6000;
                $costototal1=10400;

                $cantidad2="4m";
                $material2="hilo";
                $manodeobra2=5000;
                $cantidadhoras2=3;
                $costounitario2=5000;
                $costototal2=10000;

                $cantidad3="1m";
                $material3="tela";
                $manodeobra3=6500;
                $cantidadhoras3=4;
                $costounitario3=7000;
                $costototal3=15000;

            }else if($variable_id==20){
                $cantidad1="1kg";
                $material1="algodon";
                $manodeobra1=5000;
                $cantidadhoras1=3;
                $costounitario1=6000;
                $costototal1=11000;

                $cantidad2="2m";
                $material2="hilo";
                $manodeobra2=4500;
                $cantidadhoras2=2;
                $costounitario2=6000;
                $costototal2=12600;

                $cantidad3="3m";
                $material3="tela";
                $manodeobra3=6100;
                $cantidadhoras3=4;
                $costounitario3=5300;
                $costototal3=1200;

            }

            ?>

            <!--Fin Accion-->

          <?php
            include 'conexion.php';
            $re=mysql_query("select * from productos where id=".$variable_id)or die(mysql_error());
            while ($f=mysql_fetch_array($re)) {
            ?>
            ORDEN DE PRODUCCION  <br>
            <?php $contador=1;?>  
			<center><table border="solid">
            <tr>
			  <td>No. de Orden De Produdccion :</td> 
              <td>Cliente :</td>        
              <td>Identificacion Cliente :</td>
 			  <td>Fecha de Pedido :</td>
              <td>Producto :</td>
              <td>Cantidad :</td>
              <td>Fecha de Entrega :</td> 
              <td>Estado :</td> 
              <td>ID del producto :</td>
            </tr>
			<tr>
			  <td><?php echo $contador++;?><br></td>
			  <td><?php echo $_POST['nombreee'];?></td> 
			  <td><?php echo $_POST['cedula'];?><br></td>
			  <td>22/10/2018<br></td> 
			  <td><?php  echo $f['nombre'];?><br></td>
			  <td><?php echo $_POST['cantidad'];?><br></td>
			  <td>31/10/2018<br></td> 
			  <td> Activo <br></td>
			  <td><?php echo $variable_id ?><br></td>
			</tr>
			</table></center>
            <?php
            }
			$comprobador1=false;
		    $comprobador2=false;
			$errores=array();	
					
						//comprobador 1
						//nombre		

						if($_REQUEST['nombreee']==""){
							array_push($errores,"<br><h4>No se ingreso nombre ,es necesario y obligatorio </h4><br>");
							$comprobador1=true;
							echo "<br><h4>No se ingreso nombre ,es necesario y obligatorio </h4><br>";
						}else if(strlen($_REQUEST['nombreee'])>30){
							array_push($errores,"<br><h4>El numero de caracteres supera lo permitido </h4><br>");
							$comprobador1=true;
							echo "<br><h4>El numero de caracteres supera lo permitido </h4><br>";
						}
						
						if($_REQUEST['apellido']==""){
							array_push($errores,"<br><h4>No se ingreso nombre ,es necesario y obligatorio </h4><br>");
							$comprobador1=true;
							echo "<br><h4>No se ingreso apellido ,es necesario y obligatorio </h4><br>";
						}else if(strlen($_REQUEST['nombre'])>30){
							array_push($errores,"<br><h4>El numero de caracteres supera lo permitido </h4><br>");
							$comprobador1=true;
							echo "<br><h4>El numero de caracteres supera lo permitido </h4><br>";
						}

						//comprobador 2
						//valor 1 y valor 2		
						if($_REQUEST['telefono']==""){
							array_push($errores,"<br><h4>No se ingreso telefono ,es necesario y obligatorio</h4><br>");
							$comprobador2=true;
                            echo "<br><h4>No se ingreso telefono ,es necesario y obligatorio</h4><br>";							
						}else if(!is_numeric($_REQUEST['telefono'])){
							array_push($errores,"<br><h4>El  valor1 ingresado ,no corresponde como numero</h4><br>");
							$comprobador2=true;
							echo "<br><h4>El telefono ingresado ,no corresponde como numero</h4><br>";
						}
						if(strlen($_REQUEST['telefono'])>10){
							Array_push($errores,"<br><h4>El valor 1 se pasa de la cantidad de caracteres permitido</h4><br>");
							$comprobador2=true;
							echo "<br><h4>El telefono se pasa de la cantidad de caracteres permitido</h4><br>";
						}
						if($_REQUEST['cedula']==""){
							array_push($errores,"<br><h4>No se ingreso valor 2 ,es necesario y obligatorio</h4><br>");
							$comprobador2=true;
							echo "<br><h4>No se ingreso la cedula ,es necesario y obligatorio</h4><br>";
						}else if(!is_numeric($_REQUEST['cedula'])){
							array_push($errores,"<br><h4>El  valor2 ingresado ,no corresponde como numero</h4><br>");
							$comprobador2=true;
							echo "<br><h4>La cedula que ha ingresado ,no corresponde como numero</h4><br>";
						}
						if(strlen($_REQUEST['cedula'])>10){
							Array_push($errores,"<br><h4>El valor 2 se pasa de la cantidad de caracteres permitido</h4><br>");
							$comprobador2=true;
							echo "<br><h4>La cedula se pasa de la cantidad de caracteres permitido</h4><br>";
						}

            ?>
          


            <table border="solid">

                <tr>
                    <td>CANTIDAD</td>
                    <td>MATERIAL</td>
                    <td>MANO DE OBRA</td>
                    <td>CANTIDA DE HORAS</td>
                    <td>COSTO UNITARIO</td>
                    <td>COSTO TOTAL</td>
                </tr>
                <tr>

                    <td><?php echo $cantidad1 ?></td>
                    <td><?php echo   $material1 ?></td>
                    <td><?php echo  $manodeobra1 ?></td>
                    <td><?php echo  $cantidadhoras1 ?></td>
                    <td><?php echo $costounitario1; ?></td>
                    <td><?php echo $costototal1; ?></td>
                </tr>
                <tr>
                    <td><?php echo $cantidad2 ?></td>
                    <td><?php echo   $material2 ?></td>
                    <td><?php echo  $manodeobra2 ?></td>
                    <td><?php echo  $cantidadhoras2?></td>
                    <td><?php echo $costounitario2; ?></td>
                    <td><?php echo $costototal2; ?></td>
                    
                </tr>
                <tr>
                    <td><?php echo $cantidad3 ?></td>
                    <td><?php echo   $material3?></td>
                    <td><?php echo  $manodeobra3 ?></td>
                    <td><?php echo  $cantidadhoras3?></td>
                    <td><?php echo $costounitario3; ?></td>
                    <td><?php echo $costototal3; ?></td>
                    
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="2">
                       Costo Total Sumatoria final:<?php
                            $TOTAL=$costototal1+$costototal2+$costototal3;
                            echo $TOTAL;
                        ?>
                    </td>

                </tr>
            </table>


        </section>

        <footer>
            <div class="pie">
                PIE DE PAGINA ESTO
            </div>

        </footer>


    </body>
</html>