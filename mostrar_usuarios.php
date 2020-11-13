<?php
//incluye la clase Usuarios y CrudTodo
require_once('crud_todo.php');
require_once('usuarios.php');
$crud=new CrudTodo();
$usuarios= new usuarios();
//obtiene todos los Usuarios con el método mostrar de la clase crud
$listaUsuarios=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Usuarios</title>
</head>
<body>
	<table border=1>
		<head>
			<td>ID</td>
			<td>Nombre</td>
			<td>Mail</td>
			<td>Password</td>
            <td>Perfil</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaUsuarios as $usuarios) {?>
			<tr>
				<td><?php echo $usuarios->getId_user() ?></td>
				<td><?php echo $usuarios->getNombre() ?></td>
				<td><?php echo $usuarios->getMail() ?></td>
				<td><?php echo $usuarios->getPassword()?> </td>
                <td><?php echo $usuarios->getRol()?> </td>
				<td><a href="actualizar_usuarios.php?id_user=<?php echo $usuarios->getId_user() ?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_usuarios.php?id_user=<?php echo $usuarios->getId_user() ?>&accion=e">Eliminar</a></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>