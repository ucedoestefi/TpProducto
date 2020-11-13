<?php
//incluye la clase usuarios y CrudUsuarios
	require_once('crud_todo.php');
	require_once('usuarios.php');
	$crud= new CrudTodo();
	$usuarios= new usuarios();
	$listaUsuarios = $crud->mostrar();
	//busca el usuario utilizando el id, que es enviado por GET desde la vista mostrar_usuarios.php
	$usuarios=$crud->obtenerUsuario($_GET['id_user']);
?>
<html>
<head>
	<title>Actualizar Usuarios</title>
</head>
<body>
	<form action='actualizar_usuarios.php' method='post'>
		<table>
			<tr>
				<input type='hidden' name='id' value='<?php echo $usuarios->getId()?>'>
				<td>Nombre Usuario:</td>
				<td> <input type='text' name='nombre' value='<?php echo $usuarios->getNombre()?>'></td>
			</tr>
			<tr>
				<td>Mail:</td>
				<td><input type='text' name='mail' value='<?php echo $usuarios->getMail()?>'></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type='text' name='password' value='<?php echo $usuarios->getPassword()?>'></td>
			</tr>
			<tr>
				<td>Rol:</td>
				<td><input type='text' name='rol' value='<?php echo $usuarios->getRol()?>'></td>
			</tr>
				<input type='hidden' name='actualizar' value='actualizar'>
		</table>
			<input type='submit' value='Guardar'>
			<a href="index.php">Volver</a>
		</form>
</body>
</html>