<?php

spl_autoload_register(function($class_name){

	//ajuste para procurar em /class
	$fileName = "class". DIRECTORY_SEPARATOR .$class_name . ".php";



	if (file_exists($fileName)) {

	//	echo "<br />estou na config ddo DAO" . $fileName ."<br />";

		require_once ($fileName);
	}


})



?>