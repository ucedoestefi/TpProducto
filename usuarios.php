
<?php
	class usuarios{
		private $id_user;
		private $nombre;
		private $mail;
		private $password;
		private $rol;
 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getMail(){
		return $this->mail;
		}
		public function setMail($Mail){
			$this->mail = $Mail;
		}
		public function getPassword(){
		return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function getRol(){
		return $this->rol;
		}
		public function setRol($rol){
			$this->rol = $rol;
		} 

		public function getId_user(){
		return $this->id_user;
		}
		public function setId_user($id_user){
			$this->id_user = $id_user;
		}
	}
?>