<!DOCTYPE html>
<html>
<head>
    <title>Alta usuarios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head> 
<header>
    <div class='col1'>
        <div id="titulo">
            Productos HellBlade                   
        </div>
    </div>
    <div id="titulo2">
            senua va a buscar el alma de dillion
    </div>

        <div class="clear">
        </div>
</header>
<body>
	
    <center>
        <p>Cargar datos</p>
    <form action='administrar_usuarios.php' method='post' class="contenedor-fieldset">
        <fieldset>
            <table>
            <tr>
                <td>Nombre</td>
                <td> <input type='text' name='nombre'></td>
            </tr>
            <tr>
                <td>Mail</td>
                <td><input type='text' name='mail'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type='text' name='password' ></td>
            </tr>
            <tr>
                <td>Rol</td>
                <td><input type='text' name='rol' ></td>
            </tr>
            
                <input type='hidden' name='insertar' value='insertar'>
                    <a href="index.php"></a>
            </table>
                <input class='boton' type='submit' value='Guardar'>
                    <a href="menu_admin.php">Volver</a>   
                    
        </fieldset>        
    </form>      
    </center>
<footer>
    Productos HellBlade
</footer>
</body>
</html>