<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/estiloinicio.css">
    <link rel="stylesheet" href="css/ventanaemergente.css">
</head>
	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}
	?>



<body>
    <div class="vnt" alt="">
    <input type="checkbox" id="cerrar">
    <label for="cerrar" id="boton-cerrar">X</label>
    <div class="ventana">
        <div class="contenidodelaventana">
            <h2>¡Bienvenido!</h2>
            <img src="img/portada1.jpg" alt="" >
        </div>
    </div>
    </div>
    <main>
        <div class="navestatico" alt="">
        <nav class="menu">
            <div class="logo">
                <img src="img/logo.jpg" alt="">
            </div>
            <ul>
            <li><a href="index2.php">Inicio</a></li>
                <li><a href="productosconphp.php">Productos</a></li>
				<li><a href="quienessomos.html">¿Quiénes somos?</a></li>
				<li><a href="cerrar.html">Cerrar sesión</a></li>
            </ul>
        </nav>
        </div>
        <header>
            <div class="fondo">
                <ul>
                    <li><img src="img/portada1.jpg" alt=""></li>
                    <li><img src="img/portada2.jpg" alt=""></li>
                    <li><img src="img/portada3.jpg" alt=""></li>
                    <li><img src="img/portada4.jpg" alt=""></li>
                </ul>
               
            </div>
        </header>
        <section>
            <div class="mensaje" alt="">
                <a>¡No te detengas!</a>
                <a>Encuentra todo lo que buscas</a>
            </div>
            <div class="granbloque" alt="">
                <div class="empresa1" alt="">
                    <div class="empresa1logo" alt="">
                        <img src="img/emp1.jpg" alt="">
                    </div>
                    <div class="productos1" alt="">
                    <div class="producto11" alt="">
                        <img src="img/emp1img1.jpg" alt="">
                        <a>Producto: Casaca sport </a>
                        <a>Costo: S/.40</a>
                    </div>
                    <div class="producto12" alt="">
                        <img src="img/emp1img2.jpg" alt="">
                        <a>Producto: Casaca marrón </a>
                        <a>Costo: S/.80</a>
                    </div>
                    <div class="producto13" alt="">
                        <img src="img/emp1img3.jpg" alt="">
                        <a>Producto: Bufanda</a>
                        <a>Costo: S/.30</a>
                    </div>
                    <div class="producto14" alt="">
                        <img src="img/emp1img4.jpg" alt="">
                        <a>Producto: Blusa mangas cortas</a>
                        <a>Costo: S/.30</a>
                    </div>
                    </div>

                </div>
                <div class="empresa2" alt="">
                    <div class="empresa2logo" alt="">
                        <img src="img/libreria.jpg" alt="">
                    </div>
                    <div class="productos2" alt="">
                    <div class="producto21" alt="">
                        <img src="img/emp2img1.jpg" alt="">
                        <a>Producto: Caja de colores tonalidades de verde</a>
                        <a>Costo: S/.20</a>
                    </div>
                    <div class="producto22" alt="">
                        <img src="img/emp2img2.jpg" alt="">
                        <a>Producto: Plumones Jumbo</a>
                        <a>Costo: S/.12</a>
                    </div>
                    <div class="producto23" alt="">
                        <img src="img/emp2img3.jpg" alt="">
                        <a>Producto: Crayolas "La libreta"</a>
                        <a>Costo: S/.15</a>
                    </div>
                    <div class="producto24" alt="">
                        <img src="img/emp2img4.jpg" alt="">
                        <a>Producto: Compás</a>
                        <a>Costo: S/.13</a>
                    </div>
                    </div>
                </div>
                <div class="empresa3" alt="">
                    <div class="empresa3logo" alt="">
                        <img src="img/tec.jpg" alt="">
                    </div>
                    <div class="productos3" alt="">
                    <div class="producto31" alt="">
                        <img src="img/emp3img1.jpg" alt="">
                        <a>Producto: Audífonos</a>
                        <a>Costo: S/.20</a>
                    </div>
                    <div class="producto32" alt="">
                        <img src="img/emp3img2.jpg" alt="">
                        <a>Producto: Cámara</a>
                        <a>Costo: S/.120</a>
                    </div>
                    <div class="producto33" alt="">
                        <img src="img/emp3img3.jpg" alt="">
                        <a>Producto: Celular</a>
                        <a>Costo: S/.360</a>
                    </div>
                    <div class="producto34" alt="">
                        <img src="img/emp3img4.jpg" alt="">
                        <a>Producto: TV </a>
                        <a>Costo: S/.500</a>
                    </div>
                 </div>
                </div>
                <div class="boton" alt="">
                <button>
                    <div class="botonvermas" alt="">
                    <a>Ver más</a>
                </div>
                </button>
            </div>
            </div>
            <div class="mensaje2" alt="">
                <img src="img/seccion.jpg" alt="">
            </div>
            <div class="mensaje3" alt="">
                <a>¿Qué esperas?
                    Regístrate
                </a>
            </div>
            
        </section>
    </main>

  </body>
</html>