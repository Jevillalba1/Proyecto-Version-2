<?php
	
	class conexion
	{
		public $conection;
	}
	$connection = new PDO("mysql:host=localhost;dbname=proyecto","root","");
   	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>