<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Reporte Usuarios Drogue&iacutea PPs</title>

<link rel="stylesheet" href="style.css" />

</head>

<body>
<div id="content">

<h1>Usuarios Drogueria PPs</h1>

<hr />

<?php
	include_once("conexion.php");

	$con = new DB;
	$pacientes = $con->conectar();
	$strConsulta = "SELECT * from registro";
	$pacientes = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($pacientes);
	
	echo '<table cellpadding="0" cellspacing="0" width="100%">';
	echo '<thead><tr><td>Id</td><td>Nombre</td><td>Apellido</td><td>Direccion</td><td>Telefono</td><td>Correo</td></tr></thead>';
	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$numlista = $i + 1;
		#echo '<tr><td>'.$numlista.'</td>';
		echo '<td>'.$fila['Id'].'</td>';
        echo '<td>'.$fila['Nombre'].'</td>';
        echo '<td>'.$fila['Apellido'].'</td>';
        echo '<td>'.$fila['Direccion'].'</td>';
        echo '<td>'.$fila['Telefono'].'</td>';
        echo '<td>'.$fila['Correo'].'</td>';
		echo '<td><a href="Reporte.php?id='.$fila['Id'].'">Mas Informacion</a></td></tr>';
	}
	echo "</table>";
?>			

</div>
</body>
</html>