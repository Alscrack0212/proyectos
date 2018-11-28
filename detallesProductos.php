<html>

    <head>
	    <meta charset='utf-8'>
        <title>Detalles de producto Seleccionado</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
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
                    <li><a href="index.php">Oulets En Bogota</a>
                        <ul>	
                            <li><a href="BarrioKennedy.php">Barrio Kennedy</a></li>
                            <li><a href="BarrioChico.php">Barrio Chico</a></li>
                            <li><a href="Unicentro.php">Centro Comercial Unicentro</a></li>
                            <li><a href="Tunal.php">Centro Comercial Tunal</a></li>
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

        <?php

        if($_POST['id']==""){
            echo "A OCURRIDO UN ERROR";
        }
        
        $variable_id = $_POST['id'];
        include 'conexion.php';
        $re=mysql_query("select * from productos where id=".$variable_id)or die(mysql_error());
        while ($f=mysql_fetch_array($re)) {
        ?>
        <?php
            $imagen="";
            $detalles="";
            $id="";
            if($variable_id==1){
                $imagen="accion1.jpg";
                $detalles="La explosiva saga de Transformers continuaa con Transformers: The Last Knight.
                           Con el destino de la Tierra en juego, los nuevos heroes deben surgir en una
                           lucha epica para forjar un futuro para todos. Unete a la accion y experimenta
                           la emocion de la conversion rapida con las figuras de Transformers: The Last
                           Knight - Knight Armor Turbo Changer. Cambia esta figura de Bumblebee de Turbo
                           Changer del modo robot al modo de vehículo Chevrolet Camaro en 2 emocionantes
                           pasos. Voltea el casco del caballero sobre la cabeza de la figura en modo
                           robot para activar Knight Armor. Imagínate cargando en la batalla con esta
                           figura de Transformers: The Last Knight - Knight Armor Turbo Changer.
                           Bumblebee es un valiente explorador Autobot que se enfrenta valientemente a
                           cualquier enemigo que amenace a sus amigos humanos. Con Cade Yeager y sus
                           aliados Autobot, cargara valientemente en la batalla cuando ataquen los
                           Decepticons. Transformers y todos los personajes relacionados son marcas
                           comerciales de Hasbro.";
                $id=1;
            }else if($variable_id==2){
                $imagen="accion2.jpg";
                $detalles="Tu hijo podrá vivir grandes aventuras junto a su personaje favorito Max Steel Ataque Láser, Max tiene la habilidad de generar Turbo Energía y afortunadamente conoce a Steel, un alienígena biomecánico que lo ayuda a controlar su poder. ¡Juntos se convierten en los más grandes súper héroes! Incluye Figura Ataque Láser con 11 puntos de articulación para que tu hijo pueda recrear fantásticas aventuras. ¡Llévalo ahora y sorprende a tu hijo! Recomendado para niños mayores de 4 años.";
                $id=2;
            }else if($variable_id==3){
                $imagen="accion3.jpg";
                $detalles="Advertencia:-Rango de edad:12-15 años <br> Control remoto:No <br> Condición:Artículos en el inventario <br> Versión Tipo:Primera edición <br> Grado de terminación:Productos terminados <br> Dimensiones:10inch 25cm <br> Tamaño:25cm <br> Tipo de marioneta:Modelo <br> Por fuente de animación:Japón <br> Atributo del producto:Productos terminados <br> Género:Unisex <br> Material:PVC / plástico <br> Tipo de artículo:ModeloMfg <br> Número de modelo:naruto";
                $id=3;
            }else if($variable_id==4){
                $imagen="accion4.jpg";
                $detalles="Advertencia:-Rango de edad:12-15 años <br> Control remoto:No <br> Condición:Artículos en el inventario <br> Versión Tipo:Primera edición <br> Grado de terminación:Productos terminados <br> Dimensiones:10inch 25cm <br> Tamaño:25cm <br> Tipo de marioneta:Modelo <br> Por fuente de animación:Japón <br> Atributo del producto:Productos terminados <br> Género:Unisex <br> Material:PVC / plástico <br> Tipo de artículo:ModeloMfg <br> Número de modelo:naruto";
                $id=4;
            }else if($variable_id==5){
                $imagen="accion5.jpg";
                $detalles="Advertencia:-Rango de edad:12-15 años <br> Control remoto:No <br> Condición:Artículos en el inventario <br> Versión Tipo:Primera edición <br> Grado de terminación:Productos terminados <br> Dimensiones:10inch 25cm <br> Tamaño:25cm <br> Tipo de marioneta:Modelo <br> Por fuente de animación:Japón <br> Atributo del producto:Productos terminados <br> Género:Unisex <br> Material:PVC / plástico <br> Tipo de artículo:ModeloMfg <br> Número de modelo:naruto";
                $id=5;
            }else if($variable_id==6){
                $imagen="historicos1.jpg";
                $detalles="Figura del caballo para el caballero medieval maestro de armas azul, al igual que su caballero, está decorado en tonos azul, blanco y dorado, con dibujos de un carnero. <br> 
				           Lleva un yelmo para proteger su cabeza con unos cuernos dorados. La postura del caballo está diseñada para que pueda plantarse apoyándose sobre la cola o para que simule que está galopando cuando se apoya sobre las cuatro patas. <br>
						   Esta figura está realizada en plástico de gran calidad, pintada a mano, con un precioso acabado y todos los detalles. <br> 
                           Es una figura de Papo, la prestigiosa marca francesa conocida por la calidad de sus juguetes, por un lado pensados para las manos de los niños y con un diseño muy realista para coleccionistas.
                           <br>Mide 14,2 x 6 x 8,7 cm. La figura del caballero se vende por separado.
                           <br> Recomendada para niños mayores de 3 años.";
                $id=6;
            }else if($variable_id==7){
                $imagen="historicos2.jpg";
                $detalles="Figura medieval del caballero maestro de armas, un luchador caballero con armadura pintada en tonos marrón, azul y oro. Tiene un gran escudo con la cabeza de un águila y una corona, en la otra mano lleva una gran espada y en la cabeza un gran yelmo con el busto de un águila y sus alas. Es perfecta para coleccionistas o para que los niños se diviertan con sus castillos de juguete. Puedes completarla con su caballo. <br>
                           Es una figura de Papo, la prestigiosa marca francesa conocida por la calidad de sus juguetes, por un lado pensados para las manos de los niños y con un diseño muy realista para coleccionistas. <br>
                           Mide 11 cm de alto. <br>
                           Recomendada para niños mayores de 3 años.";
                $id=7;
            }else if($variable_id==8){
                $imagen="historicos3.jpg";
                $detalles="Figura de rey medieval, lleva una hermosa armadura de color acero y dorada, son la espada envainada y el cetro en su mano, una larga capa roja con armiño y la corona real. Está al mando de todas las tropas del castillo. Es perfecta para coleccionistas o para que los niños se diviertan con sus castillos de juguete. <br>
                           Es una figura de Papo, la prestigiosa marca francesa conocida por la calidad de sus juguetes, por un lado pensados para las manos de los niños y con un diseño muy realista para coleccionistas. <br>
                           Mide 11 cm de alto. <br>
                           Recomendada para niños mayores de 3 años.";
                $id=8;
            }else if($variable_id==9){
                $imagen="historicos4.jpg";
                $detalles="Figura medieval del caballero dragón rojo, preparado con lanza para luchar en las batallas o competir en los torneos. Tiene una completa armadura de color acero con detalles dorados, en el pecho lleva su emblema del dragón alado rojo. El yelmo tiene una corona en la parte superior y un dragón alado encima con llamas de fuego que salen hacia atrás. Es perfecta para coleccionistas o para que los niños se diviertan con sus castillos de juguete. Puedes completarla con su caballo. <br>
                           Es una figura de Papo, la prestigiosa marca francesa conocida por la calidad de sus juguetes, por un lado pensados para las manos de los niños y con un diseño muy realista para coleccionistas. <br>
                           Mide 11 cm de alto. <br>
                           Recomendada para niños mayores de 3 años.";
                $id=9;
            }else if($variable_id==10){
                $imagen="historicos5.jpg";
                $detalles="El temido Maestro de armas Dragón una  figura de caballero medieval que combina los colores negro con cobre dorado y acero. Esta figura está realizada en plástico de gran calidad, pintada a mano, con un precioso acabado y todos los detalles. Tiene en el pecho y el escudo la figura de un dragón. En la parte superior del yelmo también tiene un dragón alado. Es perfecta para coleccionistas o para que los niños se diviertan con sus castillos de juguete. Puedes completarla con su caballo. <br>
                           Es una figura de Papo, la prestigiosa marca francesa conocida por la calidad de sus juguetes, por un lado pensados para las manos de los niños y con un diseño muy realista para coleccionistas. <br>
                           Mide 11 cm de alto. <br>
                           Recomendada para niños mayores de 3 años.";
                $id=10;
            }else if($variable_id==11){
                $imagen="inteligentes1.jpg";
                $detalles="Nao es un robot humanoide programable y autónomo, desarrollado por Aldebaran Robotics, una compañía de robótica francesa con sede en París subsidiaria del grupo Softbank. El desarrollo del robot comenzó en 2004 con el lanzamiento del Proyecto Nao. El 15 de agosto de 2007, Nao sustituye al perro robot Aibo de Sony como la plataforma estándar para la Robocup, un concurso internacional de robótica.1​ Nao se utilizó en RoboCup 2008 y 2009, y el NaoV3R fue elegido como la plataforma para el SPL en RoboCup 2010.2​";
                $id=11;
            }else if($variable_id==12){
                $imagen="inteligentes2.jpg";
                $detalles="La tercera generación de robots de Toyota ya está aquí. Se trata de Toyota T-HR3, un robot de 1,52 metros y 75 kilos de peso y que se mueve exactamente que lo haces tú, ya que controlas sus extremidades. <br>
                           Es lo más parecido que tenemos en la actualidad a un robot con extremidades y controlado remotamente. Toyota sigue su desarrollo y avisa que no se trata de un producto final, sino de un trabajo en desarrollo cuya meta es la de crear un robot similar a un humano que pueda aligerar la carga de algunos trabajos.";
                $id=12;
            }else if($variable_id==13){
                $imagen="inteligentes3.jpg";
                $detalles="Nao es un robot humanoide programable y autónomo, desarrollado por Aldebaran Robotics, una compañía de robótica francesa con sede en París subsidiaria del grupo Softbank. El desarrollo del robot comenzó en 2004 con el lanzamiento del Proyecto Nao. El 15 de agosto de 2007, Nao sustituye al perro robot Aibo de Sony como la plataforma estándar para la Robocup, un concurso internacional de robótica.1​ Nao se utilizó en RoboCup 2008 y 2009, y el NaoV3R fue elegido como la plataforma para el SPL en RoboCup 2010.2​";
                $id=13;
            }else if($variable_id==14){
                $imagen="inteligentes4.jpg";
                $detalles="Nao es un robot humanoide programable y autónomo, desarrollado por Aldebaran Robotics, una compañía de robótica francesa con sede en París subsidiaria del grupo Softbank. El desarrollo del robot comenzó en 2004 con el lanzamiento del Proyecto Nao. El 15 de agosto de 2007, Nao sustituye al perro robot Aibo de Sony como la plataforma estándar para la Robocup, un concurso internacional de robótica.1​ Nao se utilizó en RoboCup 2008 y 2009, y el NaoV3R fue elegido como la plataforma para el SPL en RoboCup 2010.2​";
                $id=14;
            }else if($variable_id==15){
                $imagen="inteligentes5.jpg";
                $detalles="BigDog es un robot andador, cuadrúpedo, dinámicamente estable, para uso militar. Fue creado en 2005 conjuntamente por las compañías Boston Dynamics y Foster-Miller, el Laboratorio de Propulsión a Chorro de la Nasa y la Concord Field Station de la Universidad de Harvard.1​ Mide 0,91 m de largo, por 0,76 de alto y pesa 110 kg; más o menos como una mula pequeña. Es capaz de atravesar terrenos complicados a una velocidad de 6,4 km/h cargando hasta 150 kg de peso y de subir pendientes de 35°.1​ Un ordenador de a bordo controla la tracción, sobre la base de las entradas que recibe de los múltiples sensores con los que cuenta el robot, así como la navegación y el equilibrio.";
                $id=15;
            }else if($variable_id==16){
                $imagen="peluche1.jpg";
                $detalles="Un metro, uno veinte, uno cincuenta y cinco, o uno ochenta son son las medidas en las que está disponible Luis, este precioso oso de peluche gigante. Es de un bonito color marrón, y un tacto suave y delicado. Lleva una bufanda, que podrás personalizar bordando el nombre, o fecha que desees. Todo lo que tiene de grande, lo tiene de tierno. lo que lo convierte en un regalo más que perfecto, tanto para grandes como para peques...";
                $id=16;
            }else if($variable_id==17){
                $imagen="peluche2.jpg";
                $detalles="Horas de diversión para tu hija con este BEST MADE TOYS Peluche Unicornio Rosado/Morado de 80 cm.";
                $id=17;
            }else if($variable_id==18){
                $imagen="peluche3.jpg";
                $detalles="Características: <br>
                           Incluye Peluche de Cerdito 30 Cm.<br>
                           Hermoso y tierno diseño. <br>
                           Superficie lavable en agua tibia. <br>
                           Materiales suaves y resistentes. <br>
                           Recomendado para niños mayores de 3 años. <br>
                           Medidas aproximadas del Peluche: Alto: 30 Cm, Ancho: 18 Cm, Profundidad: 10 Cm."; 
                $id=18;
            }else if($variable_id==19){
                $imagen="peluche4.jpg";
                $detalles="Un metro, uno veinte, uno cincuenta y cinco, o uno ochenta son son las medidas en las que está disponible Luis, este precioso oso de peluche gigante. Es de un bonito color marrón, y un tacto suave y delicado. Lleva una bufanda, que podrás personalizar bordando el nombre, o fecha que desees. Todo lo que tiene de grande, lo tiene de tierno. lo que lo convierte en un regalo más que perfecto, tanto para grandes como para peques...";
                $id=19;
            }else if($variable_id==20){
                $imagen="peluche5.jpg";
                $detalles="Beanie Boos es una de las colecciones de la marca Ty, mundialmente reconocida por sus peluches de alta calidad y diseño original. <br>
                           Peluche suave y agradable al tacto con unos grandes y preciosos ojos brillantes. <br>
                           Características: <br>
                           - Material: poliéster y plástico <br>
                           - Detalles brillantes y fluorescentes <br>
                           - Cumpleaños: 26 de mayo";
                $id=20;
            }
        ?>  

        <section class="section_deta">
            <div class="section_container_deta">
                <div class="detall">    
                    <div class="img_detall">
                        <img src="./imagenes/<?php echo $imagen?>">
                    </div>

                    <div class="detalles_prod">
                        <center><span><h3>Nombre : <?php echo $f['nombre'];?></h3></span><br></center>
                        <span><h3>Precio: <?php echo $f['precio'];?></h3></span><br>
                        Los de Detalles Del producto Seleccionado Son :<br><br><?php echo $detalles?>
                    </div>
                    <!--FORMULARIO QUE DIRIJE A LOS DATOS QUE LLENA EL CLIENTE PARA EFECTUAR EL PAGO-->
                    <form method="post" action="compra.php" >
                        <input type="hidden" name="id" value="<?php echo $id;?>">   
                        <div class ="formulario">

                            <div class="cant">
                                <div class="contenedor1">
                                    <input type=text id="text" class="texto" name="cantidad" value="10">
                                </div>  

                                <div class="contenedor2">

                                    <div id="mas">
                                        +
                                    </div>

                                    <div id="menos">
                                        -
                                    </div>

                                </div>
                                <script>
                                    var Contador=10;
                                    function agregar(){
                                        var txt;
                                        Contador++;
                                        txt = document.getElementById("text");
                                        txt.value=Contador;
                                    };
                                    function quitar(){
                                        var txt;
                                        Contador--;
                                        if(Contador<10){
                                            Contador=10;   
                                        }
                                        txt = document.getElementById("text");
                                        txt.value=Contador;
                                    };
                                    document.getElementById("mas").onclick=function(){
                                        agregar();
                                    };
                                    document.getElementById("menos").onclick=function(){
                                        quitar();
                                    };
                                </script>
                            </div>

                            <div class="boton">
                                
                                <input type="submit" value="AGREGAR AL CARRO">    

                            </div>  

                        </div>
                    </form>
                </div>    
            </div>  
        </section>    		
        <?php
        }
        ?>
    </body>
</html>