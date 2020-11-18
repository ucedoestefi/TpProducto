<?php
require_once('crud_marcas.php');
require_once('marcas.php');

$crud = new CrudTodoMarcas();
$marcas = new marcas();

if (isset($_POST['insertar'])) {
	$marcas->setMarca($_POST['marca']);

	$id_marca = $_POST['id_marca'];

	if ($crud->insertar($marcas)) {
		echo '<script type="text/javascript">alert("Gracias por registrarte.");
	window.location.href="../index.php"</script>';
	}
	else {
		echo '<script type="text/javascript">alert("Este mail ya fue registrado.");
		window.location.href="../index.php"</script>';
	}
}
?>