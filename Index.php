<!DOCTYPE html>
<?php 
include('funciones/fuciones.php');
session_start();
$xc =conectar();
$sql = "SELECT * FROM header WHERE idheader=1";
$res = mysqli_query($xc,$sql);

$sql_bajo = "SELECT * FROM header WHERE idheader=2";
$res_bajo = mysqli_query($xc,$sql_bajo);

$sql_enlace="SELECT * FROM enlaces";
$res_enlace=mysqli_query($xc,$sql_enlace);

$sql_titulo="SELECT * FROM titulos Where idtitulos=1";
$res_titulo=mysqli_query($xc,$sql_titulo);

$sql_titulo2="SELECT * FROM titulos Where idtitulos=2";
$res_titulo2=mysqli_query($xc,$sql_titulo2);

$sql_titulo3="SELECT * FROM titulos Where idtitulos=3";
$res_titulo3=mysqli_query($xc,$sql_titulo3);

$sql_titulo4="SELECT * FROM titulos Where idtitulos=4";
$res_titulo4=mysqli_query($xc,$sql_titulo4);



?>

<head>

<head>
<link rel="shortcut icon" href="../Imagenes/10.jpg" type="image/x-icon">
<link rel="stylesheet" href="css/estil.css">

<head>
    <title> Gastronomía Arequipeña</title>
</head>

<body>
    <header>
        <nav>
            <?php 
            while($filas_enlace= mysqli_fetch_array($res_enlace)){
                echo '<a href="#" >' . $filas_enlace['enlaces'].'</a>';
            }
             ?>
        </nav>
        <div class="texto1">
        <section>
            <h1><?php 
            while($filas = mysqli_fetch_array($res)){

                echo $filas['contenido'];
            }
                 ?></h1>
            <h2><?php 
            while($filas_bajo=mysqli_fetch_array($res_bajo)){
                echo $filas_bajo ['contenido'];
            }
            ?></h2>
        </section>
        </div>
        <div class="hola" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: white;"></path></svg></div>
        
    </header>
    <main>
        <section class="nosotros">
        <div class="contenedor">
            <h2 class="titulo"><?php
            while($filas_titulo=mysqli_fetch_array($res_titulo)){
                echo $filas_titulo['titulos'];
            }
             ?> </h2>
            <div class="contenedor-nosotros">
                <img src="Imagenes/q.jpg" alt=""  class="primeraimg">
                <div class="contenido">
                    <h3><span>1</span>Cocina Arequipeña</h3>
                    <p>La cocina arequipeña ha alcanzado fama por ser una de las más variadas y sabrosas del Perú. 
                        Posee la mayor diversidad respecto a otras localidades del Perú gracias a la amplia despensa 
                        que posee en su campiña, investigaciones han registrado 194 variedades de platos típicos.
                        Sobresale gracias al uso de condimentos y formas de preparación tanto andinas como 
                        introducidas por los europeo</p>
                    <h3><span>2</span>Costumbres respecto a la gastronomía</h3>
                    <p>Una de las Costumbres respecto a la gastronomía de la ciudad blanca, 
                        tiende a relacionarse con los días de la semana, siendo así que la gran mayoría de 
                        restaurantes y picanterías acostumbran preparar un plato por cada día de la semana.</p>

                </div>
            </div>
        
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo"><?php
            while($filas_titulo2=mysqli_fetch_array($res_titulo2)){
                echo $filas_titulo2['titulos'];
            }?></h2>
                <div class="galeria-por">
                    <div class="imagenes5">
                        <img src="Imagenes/10.jpg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/10.jpg" alt="">
                            <h3><p>Rocoto Relleno</p></h3>
                            <br>
                            <p>Se trata de un plato que es servido tanto como entrante y como segundo, en el que el rocoto se rellena con carne molida (que puede ser de vacuno, de cerdo o una combinación de ambas) , aceitunas, guisantes, queso fresco, todo ello aderezado con comino y perejil picado, acompañado generalmente con Papa horneada.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/4j.jpg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/4j.jpg" alt="">
                            <h3><p>Ocopa</p></h3>
                            <br>
                            <p>La Ocopa arequipeña es el plato más reconocido de Arequipa, en el Perú y en el extranjero.

                                Se prepara a base de una rama de huacatay, ají mirasol, ají amarillo, maní, galletas de vainilla o pan, leche evaporada, queso fresco, ajo y condimentos.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/9.jpg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/9.jpg" alt="">
                            <h3><p>Solterito Arequipeño</p></h3>
                            <br>
                            <p>Es un plato colorido y delicioso. Se prepara a base de habas, choclos, cebolla picada, rocoto picado, queso fresco, aceitunas picadas, tomate a cuadritos, se añade los otros ingredientes y todo se mezcla con vinagre, una cuchara de perejil picado, sal y pimienta al gusto.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/4.jpg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/4.jpg" alt="">
                            <h3><p>Chupe de Camarones</p></h3>
                            <br>
                            <p>Es una sopa criolla originaria de Arequipa. Un plato muy nutritivo, potente, sustancioso y delicioso.Está preparado con camarones de río de la costa del sur del Perú, Se sirve acompañado de una salsa de rocoto o con pedazos de pan frito.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/5.jpg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/5.jpg" alt="">
                            <h3><p>Cuy Chaqtado</p></h3>
                            <br>
                            <p>Es un plato tradicional del sur peruano. Se prepara en las regiones de Arequipa, Ayacucho, Huancavelica, Cusco y Puno.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/8.jpg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/8.jpg" alt="">
                            <h3><p>Chairo</p></h3>
                            <br>
                            <p>Es una sopa que se prepara en Arequipa, Puno y Cusco. Cada región tiene sus propias características culinarias y algunos ingredientes varían según el lugar.</p>

                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/11.jpg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/11.jpg" alt="">
                            <h3><p>Adobo Arequipeño</p></h3>
                            <br>
                            <p>Se prepara habitualmente en olla de barro para sentir su potente sabor, y se sirve acompañado de camote o papa.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/12.jpeg" alt="">
                        <div class="galeria">
                            <img src="Imagenes/12.jpeg" alt="">
                            <h3><p>Cauchi</p></h3>
                            <br>
                            <p>El cauchi es propia de la gastronomía de la región; casi siempre se acompaña de papas hervidas peladas en rodajas.</p>
                        </div>
                    </div>
                    

                </div>
            </div>
            

           

        <section class="cliente-contenedor">
        <div class="contenedor">
            <h2 class="titulo"><?php
            while($filas_titulo3=mysqli_fetch_array($res_titulo3)){
                echo $filas_titulo3['titulos'];
            }?></h2>
            <div class="cards">
                <div class="card">
                <img src="Imagenes/per1.jpg" alt="">
                <div class="contenido-card">
                    <h4>Eduardo Sernaque Loo</h4>
                    <br>
                    <p>Licenciado en la Escuela Culinaria de Le Cordon Bleu en Perú. Quince años de experiencia en empresas líderes en el sector gastronómico, hotelero y educativo como Marriott International y LATAM’s 50 Best Restaurants..</p>
                </div>
            </div>
        
            
                <div class="card">
                <img src="Imagenes/per2.jpg" alt="">
                <div class="contenido-card">
                    <h4>Monica Huerta</h4>
                    <br>
                    <p>Mónica demuestra su herencia arequipeña manteniendo las ancestrales técnicas de cocina dentro de su preparación..</p>
                </div>
            </div>
        </div>
        </section>
        <section class="servicios">
            <div class="contenedor">
                <h2 class="titulo"> <?php
            while($filas_titulo4=mysqli_fetch_array($res_titulo4)){
                echo $filas_titulo4['titulos'];
            }?></h2>
                <div class="servicio1">
                    <div class="servicioindi">
                        <img src="Imagenes/14.jpg" alt="">
                        <h3>SABIAS QUE...</h3>
                        <p>Muchos platos arequipeños fueron creados para satisfacer los gustos de españoles, comerciantes, militares y sacerdotes, en las épocas pasadas que se establecieron en Arequipa.</p>
                    </div>
                    <div class="servicioindi">
                        <img src="Imagenes/16.jpg" alt="">
                        <h3>SABIAS QUE...</h3>
                        <p>La diversidad gastronómica peruana ha sido un motor a impulsar las tradiciones, costumbres y la cultura ancestral hacia los recónditos lugares de todo el mundo.</p>
                    </div>
                    <div class="servicioindi">
                        <img src="Imagenes/7.jpg" alt="">
                        <h3>SABIAS QUE...</h3>
                        <p>El queso helado, o helado de tarro, es un dulce lácteo helado que, a pesar de denominarse de tal manera, no lleva queso entre sus ingredientes principales. Su textura es cremosa y generalmente se prepara de forma artesanal, combinándolo con diversos sabores,</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="contenedor-footer">
            <div class="contenedor-foo">
                <h4>celular</h4>
                <p>99999999</p>
            </div>
            <div class="contenedor-foo">
                <h4>email</h4>
                <p>gastro.Arequipeña@hotmail.com</p>
            </div>
            <div class="contenedor-foo">
                <h4>ubicacion</h4>
                <p>tu corazón 7u7</p>
            </div>
        </div>
        <h2 class="final-titu"> &copy; GASTRONOMIA AREQUIPEÑA</h2>
    </footer>

</body>

</html>