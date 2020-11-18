<?php
// incluye la clase Db
require_once('conexion.php');

class CrudMarcas
{
	// constructor de la clase
	public function __construct()
	{
	}

	// método para insertar, recibe como parámetro un objeto de tipo libintegrantesro
	public function insertar($marcas)
	{
		$salida = false;

		$db = Db::conectar();

		$select = $db->prepare('SELECT count(*) as CONT from marcas where marca = :marca');
		$select->bindValue('marca', $marcas->getMarca());
		$select->execute();
		$contador = $select->fetch();

		if ($contador['CONT'] == 0) {
			$insert = $db->prepare('INSERT INTO marcas values(NULL,:marca)');
            $insert->bindValue('marca', $marcas->getMarca());
			$insert->execute();

			$salida = true;
		}
		return $salida;
	}

}
?>