<?php
//incluye la clase Tarea y CrudMarcas
require_once('crud_todo_marcas.php');
require_once('marcas.php');
 
$crud= new CrudTodoMarcas();
$marcas= new marcas();
	// si el elemento insertar no viene nulo llama al crud e inserta una tarea
	if (isset($_POST['insertar'])) {
		$marcas->setMarca($_POST['marca']);
                //llama a la función insertar definida en el crud
		$crud->insertar($marcas);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la tarea
	}elseif(isset($_POST['actualizar'])){
		$marcas->setId_marca($_POST['id_marca']);
		$marcas->setMarca($_POST['marca']);

		$crud->actualizar($marcas);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina una tarea
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id_marca']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar_marcas.php');
	}
?>