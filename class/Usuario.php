<?php

	class Usuario {

		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function getIdusuario() {
			return $this->idusuario;
		}
		public function setIdusuario($value) {

			$this->idusuario = $value;
		}
		public function getDeslogin() {
			return $this->deslogin;
		}
		public function setDeslogin($value) {

			$this->deslogin = $value;
		}
		public function getDessenha() {
			return $this->dessenha;
		}
		public function setDessenha($value) {

			$this->dessenha = $value;
		}		
		public function getDtCadastro() {
			return $this->dtcadastro;
		}
		public function setDtCadastro($value)  {

			$this->dtcadastro = $value;
		}				

		public function loadById($id) {

	
			$sql = new Sql();

			

			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios   WHERE idusuario = :ID ", array(":ID"=>$id));

						

			if (count($results) > 0) {

				$row = $results[0];
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));


			}


		}

		public function __toString() {


			//return "AQUI AQUI AQUI";
			return json_encode (array("idusuario"=>$this->getIdusuario(),
									  "deslogin"=>$this->getDeslogin(),
                                      "dessenha"=>$this->getDesSenha(),
                                      "deslogin"=>$this->getDeslogin(),
                                      "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s") 
									));
									
		}


//========================================================================================
		public function loadBy2fields($id, $deslogin) {

	
			$sql = new Sql();

			

			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios   WHERE idusuario = :ID  and deslogin =:DL", array(":ID"=>$id,":DL"=>$deslogin));

						

			if (count($results) > 0) {

				$row = $results[0];
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));


			}


		}
//========================================================================================		
		public function aprendendoJoin($id) {

	
			$sql = new Sql();

			

			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT A.deslogin,  A.dessenha, from tb_usuarios A  WHERE A.idusuario = :ID ", array(":ID"=>$id));

						

			if (count($results) > 0) {

				$row = $results[0];
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				

			}


		}
//========================================================================================		

	}


?>