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

//========================================================================================		

		public function loadById($id) {

			$sql = new Sql();

			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios   WHERE idusuario = :ID ", array(":ID"=>$id));

			if (count($results) > 0) {

				$this->setdata($results[0]);

			}

		}

//========================================================================================		

		public function getList1() {

			$sql = new Sql();

			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios");

			$cont = count($results);

			if ($cont > 0) {
				for($i=0;$i<$cont;$i++) {
					$this->setData($results[$i]);
					echo "<br /> " . $this;
				}	

			}
		}		

//========================================================================================		
		public static function getList2():array {

			$sql = new Sql();


			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios");
			$cont = count($results);
			$retorno = array();
			array_push($retorno, $results);
			array_push($retorno,$cont);

			return($retorno);




		}		

//========================================================================================				

		public static function search($param) {

			$sql = new Sql();
			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios where deslogin like :SEARCH ORDER BY  deslogin", array(':SEARCH'=>"%$param%"));

			var_dump(array(":SEARCH"=>"$param"));
			return $results;

		}

//========================================================================================						


		public function login($deslogin, $password) {

	
			$sql = new Sql();
			
			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios   WHERE deslogin = :LOGIN  and dessenha =:PASSWORD", array(":LOGIN"=>$deslogin,
																													  ":PASSWORD"=>$password));
						
			if (count($results) > 0) {

				$this->setData($results[0]);
			} else {

				throw new Exception(" |Login e/ou senha inválidos");
			}

		}

//========================================================================================						


		public function loadBy2fields($id, $deslogin) {

			$sql = new Sql();
			
			//$results = $sql->select("select * from tb_usuarios WHERE idsuario = :ID", array(":ID"=>$id));
			$results = $sql->select("SELECT * from tb_usuarios   WHERE idusuario = :ID  and deslogin =:DL", array(":ID"=>$id,":DL"=>$deslogin));
						
			if (count($results) > 0) {

				$this->setData($results[0]);
			} else {

				throw new Exception(" |Login e/ou senha inválidos");
			}

		}

//========================================================================================						

		public function setData($data) {

				$this->setIdusuario($data['idusuario']);
				$this->setDeslogin($data['deslogin']);
				$this->setDessenha($data['dessenha']);
				$this->setDtcadastro(new DateTime($data['dtcadastro']));


		}

//========================================================================================						
		public function Insert() {

	
			$sql = new Sql();
			
			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(":LOGIN"=>$this->getDeslogin(), 
																						":PASSWORD"=>$this->getDessenha())
			);

			if (count($results) > 0) {

				$this->setData($results[0];);

			}


		}		

//========================================================================================		
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