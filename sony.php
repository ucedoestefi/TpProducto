<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="./style.css"/>
    <title>Consolas Sony</title>
</head>

<header class="contenedor-header">
        <div class="contenedor-principio">
            <h1>PRODUCTOS HELLBLADE</h1>
        </div>

        <!--Comienzo del navegador-->
        <div class="contenedor-navegacion">
            <nav class="navegacion">
                <ul class="menu">
                    <li><a href="#">Inicio</a></li>
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
    </header>

<body>
	<section class="contenedor-sony">
		<div id="contenedor">
			<input type="radio" name="filtro" id="todos" checked="yes">
			<label for="todos">Todos</label>

			<input type="radio" name="filtro" id="play3">
			<label for="play3">Play 3</label>

			<input type="radio" name="filtro" id="play4">
			<label for="play4">Play 4</label>

			<div id="elementos">
				<img src="img/ps3-FAT.png" class="play3" width= 30% height = 30%>
				<a href="detalle_play3.php"><img src="img/ps3-slim.png" class="play3" width= 30% height = 30%></a>

				<img src="img/ps4-FAT.png" class="play4" width= 30% height = 30%>
				<img src="img/ps4-slim.png" class="play4" width= 30% height = 30%>
				<a href="detalle_play4.php"><img src="img/ps4-pro.png" class="play4" width= 30% height = 30%></a>
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
</body>
</html>