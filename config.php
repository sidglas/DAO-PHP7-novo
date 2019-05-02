<?php

spl_autoload_register(function($class_name){

	//ajuste para procurar em /class
	$fileName = "class". DIRECTORY_SEPARATOR .$class_name . ".php";

	if (file_exists($fileName)) {

		require_once ($fileName);
	}


})



?>