<?php

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Usuarios_drogueria_pps.doc");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("usuarios",$conexion);		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte word</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>Reportes usuarios drogueria PPs</strong></CENTER></td>
  </tr>
  <tr bgcolor="Green">
    <td><strong>Id</strong></td>
    <td><strong>Tipo de usuario</strong></td>
    <td><strong>Nombre de usuario</strong></td>
    <td><strong>Conseña</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select id,Tipo_Usuario,nombre,password from users");
while($res=mysql_fetch_array($sql)){		

	$id=$res["id"];
	$Tipo_usuario=$res["Tipo_Usuario"];
	$nombre=$res["nombre"];
	$password=$res["password"];
?>  
 <tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $Tipo_usuario; ?></td>
	<td><?php echo $nombre; ?></td>
	<td><?php echo $password; ?></td>
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>