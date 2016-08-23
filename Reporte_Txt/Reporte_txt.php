<?php
session_start();
if(isset($_SESSION['Id_Usuario'])){

}
else{
	echo'Permiso denegado, seras enviado al inicio';
	header("Refresh: 3; URL=\Proyecto\Pagina\Pagina");
	sleep(1);
	exit();
}
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Usuarios_Droguería_PPs.txt");
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("proyecto",$conexion);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Usuarios Droguer%iacuten PPs</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>Reporte usuarios Droguería PPs</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>Id</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido</strong></td>
    <td><strong>Direccion</strong></td>
    <td><strong>Telefono</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Id_Usuario</strong></td>
    <td><strong>Contraseña</strong></td>
  </tr>
  
<?PHP
$sql=mysql_query("SELECT * FROM registro ORDER BY Nombre");
while($res=mysql_fetch_array($sql)){		

	$Id=$res["Id"];
	$Nombre=$res["Nombre"];
	$Apellido=$res["Apellido"];
	$Direccion=$res["Direccion"];
	$Telefono=$res["Telefono"];
	$Correo=$res["Correo"];
	$Id_Usuario=$res["Id_Usuario"];
	$Contrasena=$res["Contrasena"];					

?>  
 <tr>
	<td><?php echo $Id; ?></td>
	<td><?php echo $Nombre; ?></td>
	<td><?php echo $Apellido; ?></td>
	<td><?php echo $Direccion; ?></td>
	<td><?php echo $Telefono; ?></td>
	<td><?php echo $Correo; ?></td>
	<td><?php echo $Id_Usuario; ?></td>
	<td><?php echo $Contrasena; ?></td>                     
 </tr> 
  <?php
}
 ?>
</table>
</body>
</html>