
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


/*
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

*/

/*
echo "<br />============= Insert no MySQL  sem usar o construct ============================================================<br />";
//apenas MySql, pois tem uama stored procedure e esta é chamada via caal.
//se fosse no MSSQL seria via Execute

$aluno = new Usuario;
$aluno->setDeslogin("Mariana");
$aluno->setDessenha("@123456");
$aluno->insert();
echo "Inserido Aluno :";
echo $aluno;

*/
/*
echo "<br />============= Insert no MySQL  usando o construct ============================================================<br />";
//apenas MySql, pois tem uama stored procedure e esta é chamada via caal.
//se fosse no MSSQL seria via Execute

$aluno = new Usuario("Giovani","444555");
$aluno->insert();
echo "Inserido Aluno :";
echo $aluno;
*/
/*
echo "<br />============ Update  ============== ============================================================<br />";
//apenas MySql, pois tem uama stored procedure e esta é chamada via caal.
//se fosse no MSSQL seria via Execute

//$aluno = new Usuario("Giovanazi","555666");

 
$aluno = new Usuario();
$aluno->setIdusuario("39") ; 

$aluno->Update("Giovanazil","555666");
echo "Alterado Aluno :";

echo $aluno;

echo "<br />=============Update  usando o construct ============================================================<br />";
$aluno = new Usuario("Capelma", "nova0Senha");
$aluno->setIdusuario("4") ; 

$aluno->UpdateDadosConstruct();
echo "Alterado Aluno :";

echo $aluno;

*/
echo "<br />============ Deleta ============================================================<br />";

$usuario = new Usuario();
$usuario->loadById(39);
$usuario->delete();
echo $usuario;

?>