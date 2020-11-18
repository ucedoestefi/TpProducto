<?php
//incluye la clase Tarea y CrudUsuarios
require_once('crud_todo.php');
require_once('usuarios.php');
 
$crud= new CrudTodo();
$usuarios= new usuarios();
	// si el elemento insertar no viene nulo llama al crud e inserta una tarea
	if (isset($_POST['insertar'])) {
		$usuarios->setNombre($_POST['nombre']);
		$usuarios->setMail($_POST['mail']);
		$usuarios->setPassword($_POST['password']);
        $usuarios->setRol($_POST['rol']);
                //llama a la función insertar definida en el crud
		$crud->insertar($usuarios);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la tarea
	}elseif(isset($_POST['actualizar'])){
		$usuarios->setIdUser($_POST['id_user']);
		$usuarios->setNombre($_POST['nombre']);
		$usuarios->setMail($_POST['mail']);
		$usuarios->setPassword($_POST['password']);
                $usuarios->setRol($_POST['rol']);
          
		$crud->actualizar($usuarios);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina una tarea
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id_user']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar_usuarios.php');
	}
?>