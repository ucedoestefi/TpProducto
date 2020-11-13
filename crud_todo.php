<?php
// incluye la clase Db
require_once('conexion.php');
if(file_exists('mailer.php')){
  require_once('mailer.php');
}
if(file_exists('../mailer.php')){
  require_once('../mailer.php');
}

class CrudTodo
{
	// constructor de la clase
	public function __construct()
	{
	}

	// método para insertar, recibe como parámetro un objeto de tipo tareas
	public function insertar($usuarios)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO usuarios values (NULL,:nombre,:mail,:password,:rol)');
		$insert->bindValue('nombre', $usuarios->getNombre());
		$insert->bindValue('mail', $usuarios->getMail());
		$insert->bindValue('password', $usuarios->getPassword());
		$insert->bindValue('rol', $usuarios->getRol());

		$insert->execute();

		$usuarios->setId_user($db->lastInsertId());
        //
	//	$insert = $db->prepare('INSERT INTO tarea_por_tablero values 
	//	(NULL,:id_tablero,:id_tarea)');
	//	$insert->bindValue('id_tablero', $tareas->getId_tablero());
	//	$insert->bindValue('id_tarea', $tareas->getId_tarea());
	//	$insert->execute();

	//	mailer($tareas);
	}

	// método para mostrar todos los tareas
	public function mostrar()
	{
		$db = Db::conectar();
		$listaUsuarios = [];
		$select = $db->query('SELECT * FROM usuarios');

		foreach ($select->fetchAll() as $usuarios) {
			$myUsuarios = new usuarios();
			$myUsuarios->setId_user($usuarios['id_user']);
			$myUsuarios->setNombre($usuarios['nombre']);
			$myUsuarios->setMail($usuarios['mail']);
			$myUsuarios->setPassword($usuarios['password']);
			$myUsuarios->setRol($usuarios['rol']);

			$listaUsuarios[] = $myUsuarios;
		}
		return $listaUsuarios;
	}

	// método para mostrar las tareas filtradas
	//public function mostrarFiltrado($id_tablero)
	//{
	//	$db = Db::conectar();
	//	$listaTarea = [];
	//	$select = $db->prepare('SELECT * FROM tareas where id_tarea in 
	//	(select id_tarea from tarea_por_tablero t where t.id_tablero=:id_tablero)
	//	order by 5, 2, 4');
	//	$select->bindValue('id_tablero', $id_tablero);
	//	$select->execute();

	//	foreach ($select->fetchAll() as $tarea) {
	//		$myTarea = new tareas();
	//		$myTarea->setId_tarea($tarea['id_tarea']);
	//		$myTarea->setFecha_tarea($tarea['fecha_tarea']);
	//		$myTarea->setDesc_tarea($tarea['desc_tarea']);
	//		$myTarea->setDesc_tarea($tarea['desc_tarea']);
	//		$myTarea->setDuracion_tarea($tarea['duracion_tarea']);
	//		$myTarea->setEstado($tarea['estado']);
	//		$myTarea->setId_integrante($tarea['id_integrante']);
	//		$myTarea->setObservaciones($tarea['observaciones']);
	//		$listaTarea[] = $myTarea;
	//	}
	//	return $listaTarea;
	//}

	// método para eliminar un tareas, recibe como parámetro el id del tareas
	public function eliminar($id_user)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM usuarios where id_user=:id_user'); 
		$eliminar->bindValue('id_user', $id_user);
		$eliminar->execute();

		$eliminar = $db->prepare('DELETE FROM usuarios WHERE id_user=:id_user'); 
		$eliminar->bindValue('id_user', $id_user);
		$eliminar->execute();
	}

	// método para buscar un tareas, recibe como parámetro el id del tareas
	public function obtenerUsuario($id_user)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM usuarios WHERE id_user=:id_user');
		$select->bindValue('id_user', $id_user);
		$select->execute();
		$usuarios = $select->fetch();
		$myUsuarios = new usuarios();
		$myUsuarios->setId_user($usuarios['id_user']);
		$myUsuarios->setNombre($usuarios['nombre']);
		$myUsuarios->setMail($usuarios['mail']);
		$myUsuarios->setPassword($usuarios['password']);
		$myUsuarios->setRol($usuarios['rol']);
		return $myUsuarios;
	}

	// método para actualizar un tareas, recibe como parámetro el tareas
	public function actualizar($usuarios)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE usuarios 
			SET nombre=:nombre, mail=:mail, password=:password, rol=:rol
			WHERE id_user=:id_user');

		$actualizar->bindValue('id_user', $usuarios->getId_user());
		$actualizar->bindValue('nombre', $usuarios->getNombre());
		$actualizar->bindValue('mail', $usuarios->getMail());
		$actualizar->bindValue('password', $usuarios->getPassword());
		$actualizar->bindValue('rol', $usuarios->getRol());
		$actualizar->execute();

		mailer($usuarios);
	}
}