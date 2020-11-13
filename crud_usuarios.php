<?php
// incluye la clase Db
require_once('conexion.php');

class CrudUsuarios
{
	// constructor de la clase
	public function __construct()
	{
	}

	// método para insertar, recibe como parámetro un objeto de tipo libintegrantesro
	public function insertar($usuarios)
	{
		$salida = false;

		$db = Db::conectar();

		$select = $db->prepare('SELECT count(*) as CONT from usuarios where mail = :mail');
		$select->bindValue('mail', $usuarios->getMail());
		$select->execute();
		$contador = $select->fetch();

		if ($contador['CONT'] == 0) {
			$insert = $db->prepare('INSERT INTO usuarios values(NULL,:nombre,:mail,:password,:rol)');
			$insert->bindValue('nombre', $usuarios->getNombre());
			$insert->bindValue('mail', $usuarios->getMail());
			$insert->bindValue('password', $usuarios->getPassword());
			$insert->bindValue('rol', $usuarios->getRol());
			$insert->execute();

			$salida = true;
		}
		return $salida;
	}

	public function loguear($usuario)
	{
		$salida = false;
		$user = $usuario->getMail();
		$pass = $usuario->getPassword();

		$db = Db::conectar();

		$select = $db->prepare('SELECT COUNT(*) AS CONT, id_user FROM usuarios WHERE mail = :mail AND password = :pass');
		$select->bindValue('mail', $usuario->getMail());
		$select->bindValue('pass', $usuario->getPassword());
		$select->execute();
		$contador = $select->fetch();

		if ($contador['CONT'] > 0) {
			setcookie("user_id", $contador['id_user'], time() + 10000, '/');
			$salida = true;
		}

		return $salida;
	}
}
?>