<?php
	class marcas{
		private $id_marca;
		private $marca;
 
		function __construct(){}
 
		public function getMarca(){
		return $this->marca;
        }
        
		public function setMarca($marca){
			$this->marca = $marca;
		}

		public function getId_marca(){
		return $this->id_marca;
        }
        
		public function setId_marca($id_marca){
			$this->id_marca = $id_marca;
		}
	}
?>