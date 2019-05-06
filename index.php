
<br />
<a href="/index.php">Menu </a>
<br />
<?php


require_once("config.php");

/*
$sql = new Sql();


$id = 2;
$usuarios = $sql->select("SELECT * from tb_usuarios   where idusuario = :ID ", array(":ID"=>$id));
echo json_encode($usuarios);

$id = 3;
$usuarios = $sql->select("SELECT * from tb_usuarios   where idusuario = :ID ", array(":ID"=>$id));
echo json_encode($usuarios);
*/

echo "<br />=========================================================================<br />";


$joseane = new Usuario();


$joseane->loadById(3);


echo($joseane);
echo "<br />";
echo "<br />=========================================================================<br />";
var_dump($joseane);

echo "<br />=========================================================================<br />";

$quem = new Usuario();
$quem->loadBy2Fields(3,"Joseane");
echo $quem;

echo "<br />=============Aprendendo Join ============================================================<br />";

$quem1 = new Usuario();
$quem1->aprendendoJoin(3);
var_dump($quem1);

echo "<br />============= Listando  ============================================================<br />";


$lista1 = new Usuario();
$lista1->getList1();



echo "<br />============= Listando com metodp estático  ============================================================<br />";

//como na getlist2 não se usou $this, podemos fazer uma funçãoo estática!!!
//$lista2 = new Usuario();

echo " <br /> Vendo Lista 2 através de método estático <br />";
$retornou = Usuario::getList2();
var_dump($retornou);

echo "<br />============= Listando pesquisa (search)  ============================================================<br />";

//como na getlist2 não se usou $this, podemos fazer uma funçãoo estática!!!
//$lista2 = new Usuario();

echo " <br /> VendoPesquisa através de método estático <br />";
$retornou = Usuario::search("jo");
var_dump($retornou);



/*
$cont = count
			if ($cont > 0) {

				return($results,$cont);
				for($i=0;$i<$cont;$i++) {


					$row = $results[$i];
					$this->setIdusuario($row['idusuario']);
					$this->setDeslogin($row['deslogin']);
					$this->setDessenha($row['dessenha']);
					$this->setDtcadastro(new DateTime($row['dtcadastro']));
					echo "<br />" . $this;
				}	

			}

*/



?>