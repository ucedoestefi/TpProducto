<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="./style.css" />
    <title>Productos</title>
</head>

<header class="contenedor-header">
        <div class="contenedor-principio">
            <h1>PRODUCTOS HELLBLADE</h1>
        </div>

        <!--Comienzo del navegador-->
        <div class="contenedor-navegacion">
            <nav class="navegacion">
                <ul class="menu">
                    <li><a href="productos.php">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Consolas</a>
                        <ul class="submenu">
                            <li><a href="sony.php">Sony</a></li>
                            <li><a href="microsoft.php">Microsoft</a></li>
                            <li><a href="nintendo.php">Nintendo</a></li>
                        </ul>
                    </li>
                    <li><a href="#">VideoJuegos</a>
                        <ul class="submenu">
                            <li><a href="#">Juegos PlayStation</a></li>
                            <li><a href="#">Juegos Xbox</a></li>
                            <li><a href="#">Juegos Nintendo</a></li>
                            <li><a href="#">Juegos PC</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pc</a>
                        <ul class="submenu">
                            <li><a href="#">Escritorio</a></li>
                            <li><a href="#">Notebook</a></li>
                            <li><a href="#">Perifericos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <h1 class="header-title">P<span>roductos Destacados</span></h1>

    </header>


<body>
    
    <!--Comienzo del formulario-->
    <section class="contenedor-productos">
        <div id="contenedor">
            <div id="elementos-destacados">
                <img src="img/ps3-slim.png" class="play3" width= 30% height = 30%>
                <img src="img/ps4-pro.png" class="play4" width= 30% height = 30%>
                <img src="img/nintendo-switch.png" class="laptops" width= 30% height = 30%>
                <img src="img/lenovo-ideapad-l340-15-gaming-hero-1126-570x405.png" class="pc" width= 30% height = 30%>
                
            </div>
        </div>
    </section>

    <!--Cominezo del Footer-->
    <footer>
        <div class="contenedor-hell">
            <p>HELLBLADE&trade;. Todos los derechos reservados.</p>
        </div>
        <div class="contenedor-redes">
            <div class="contenedor-facebook">
                <a href="https://www.facebook.com/"><img src="imagen/facebook.png" width="25" height="25"></a>
            </div>

            <div class="contenedor-instagram">
                <a href="https://www.instagram.com/"><img src="imagen/instagram.png" width="25" height="25"></a>
            </div>

            <div class="contenedor-twitter">
                <a href="https://www.twitter.com/"><img src="imagen/twitter.png" width="25" height="25"></a>
            </div>
        </div>
    </footer>

    </div>
</body>

</html>