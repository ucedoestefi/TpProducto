<?php
require_once('crud_usuarios.php');
require_once('usuarios.php');

$crud = new CrudUsuarios();
$usuario = new usuarios();

if (isset($_POST['insertar'])) {
	$usuario->setNombre($_POST['nombre']);
	$usuario->setApellido($_POST['apellido']);
	$usuario->setMail($_POST['mail']);
    $usuario->setPassword($_POST['password']);
    $usuarios->setRol($_POST['rol']);

	$user_id = $_POST['user_id'];

	if ($crud->insertar($usuario)) {
		echo '<script type="text/javascript">alert("Gracias por registrarte.");
	window.location.href="../index.php"</script>';
	}
	else {
		echo '<script type="text/javascript">alert("Este mail ya fue registrado.");
		window.location.href="../index.php"</script>';
	}
} elseif (isset($_POST['loguear'])) {
	$usuario->setMail($_POST['mail']);
	$usuario->setPassword($_POST['password']);

	if ($crud->loguear($usuario)) {
		header('Location: menu_admin.php');
	} else {
		echo '<script type="text/javascript">alert("Usuario/Contraseña inválidos.");
		window.location.href="../index.php"</script>';
	}
}
?>