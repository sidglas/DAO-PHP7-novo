
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






?>