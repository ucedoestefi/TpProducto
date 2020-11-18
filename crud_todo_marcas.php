<?php
// incluye la clase Db
require_once('conexion.php');
if(file_exists('mailer.php')){
  require_once('mailer.php');
}
if(file_exists('../mailer.php')){
  require_once('../mailer.php');
}

class CrudTodoMarcas
{
	// constructor de la clase
	public function __construct()
	{
	}

	// método para insertar, recibe como parámetro un objeto de tipo marcas
	public function insertar($marcas)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO marcas values (NULL,:marca)');
		$insert->bindValue('marca', $marcas->getMarca());
		$insert->execute();

		$marcas->setId_marca($db->lastInsertId_marca());
        //
	//	$insert = $db->prepare('INSERT INTO tarea_por_tablero values 
	//	(NULL,:id_tablero,:id_tarea)');
	//	$insert->bindValue('id_tablero', $tareas->getId_tablero());
	//	$insert->bindValue('id_tarea', $tareas->getId_tarea());
	//	$insert->execute();

	//	mailer($tareas);
	}

	// método para mostrar todos los marcas
	public function mostrar()
	{
		$db = Db::conectar();
		$listaMarcas = [];
		$select = $db->query('SELECT * FROM marcas');

		foreach ($select->fetchAll() as $marcas) {
			$myMarcas = new marcas();
			$myMarcas->setId_marca($marcas['id_marca']);
			$myMarcas->setMarca($marcas['marca']);

			$listaMarcas[] = $myMarcas;
		}
		return $listaMarcas;
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
	public function eliminar($id_marca)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM marcas where id_marca=:id_marca'); 
		$eliminar->bindValue('id_marca', $id_marca);
		$eliminar->execute();

		$eliminar = $db->prepare('DELETE FROM marcas WHERE id_marca=:id_marca'); 
		$eliminar->bindValue('id_marca', $id_marca);
		$eliminar->execute();
	}

	// método para buscar un tareas, recibe como parámetro el id del tareas
	public function obtenerMarca($id_marca)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM marcas WHERE id_marca=:id_marca');
		$select->bindValue('id_marca', $id_marca);
		$select->execute();
		$marcas = $select->fetch();
		$myMarcas = new marcas();
		$myMarcas->setId_marca($marcas['id_marca']);
		$myMarcas->setMarca($marcas['marca']);
		return $myMarcas;
	}

	// método para actualizar un tareas, recibe como parámetro el tareas
	public function actualizar($marcas)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE marcas 
			SET marca=:marca
			WHERE id_marca=:id_marca');

		$actualizar->bindValue('id_marca', $usuarios->getId_marca());
		$actualizar->bindValue('marca', $usuarios->getMarca());
		$actualizar->execute();

		mailer($marcas);
	}
}