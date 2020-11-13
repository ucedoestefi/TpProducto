<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="shortcut icon" href="./img/consulta.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet" />

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./datatables.min.js"></script>
	<title>Productos HellBlade</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<a class="navbar-brand" href="index.php">Productos HellBlade</a>
	</nav>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center introduccion">
			<div class="row" id="home">
				<div class="col-12 fondo-titulo">
					<div class="titulo">Productos HellBlade</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col-md-8 col-lg-7 texto-intro ml-2 mr-2 mt-5 slide-animate-left primer-linea">
					Bienvenido a la tienda de productos de electronica<br />
					Desde aquí podrá acceder a los productos
					<br /><br />
				</div>
			</div>
		</div>
		<form action="usuarios_verificacion.php" class="contenedor-tablas col-sm-8 " id="form-login"  method="POST">
			<h3>Loguearse</h3>
			<div class="form-group">
				<label for="mail">Mail</label>
				<input input type="email" name="mail" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input input type="password" name="password" class="form-control" required>
			</div>

			<input type="hidden" name="loguear" value="loguear" />
			<input type="submit" class="btn btn-primary" value="Ingresar" />
			<span>¿No tenes una cuenta? <button class="btn btn-secondary" onclick="displayRegistro()">Registrate!</button></span>
		</form>

		<form action="usuarios_verificacion.php" class="contenedor-tablas col-sm-8 " id="form-registro" method="POST" style="display: none;">
			<h3>Registrate</h3>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input input type="text" name="nombre" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="apellido">Apellido</label>
				<input input type="text" name="apellido" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="mail">Mail</label>
				<input input type="email" name="mail" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input input type="password" name="password" class="form-control" required>
			</div>

			<input type="hidden" name="insertar" value="insertar" />
			<input type="submit" class="btn btn-primary" value="Registrarse" />
			<button class="btn btn-secondary" onclick="displayLogin()">Volver</button>
		</form>
</body>
</html>
