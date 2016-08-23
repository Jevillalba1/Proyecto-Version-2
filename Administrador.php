<?php
 session_start();
if(isset($_SESSION['Nombre_Usuario'])){
    
}
else{
	echo'Permiso denegado, seras enviado al inicio';
	header("Refresh: 3; URL=Index.html");
	sleep(1);
	exit();
}
?>
<html>
	<head  profile="http://www.w3.org/2005/10/profile">
		<meta charset="utf-8">
		<Title> Administración </title>
		<link rel="icon" type="image/png" href="../9.png">
		<link rel="stylesheet" type="text/css" href="../Style.css"> 
		
	</head>
	
	<body background = "..\10.jpg">
	<table>
			<tr>
				<td><a href="Administrador.php"><IMG SRC="../2.png" height = 70 width= 170 Hspace = 10 Vspace = 1 > </a></td>
				<td><marquee  width = "900px" height = "60" behavior=slide aling=top scrollamount = 10 bgcolor = red> 
				<font face = "Verdana", size = 20 , color = white>  Droguería PPs </font>
				</marquee></td>
				<td><?php echo '<font face="Times New Roman" color="white" size=4> '.$_SESSION['Nombre_Usuario']?></td>
				<td><a href="\Proyecto\Pagina\Pagina\Login\Logout.php" class="myButton">Cerrar sesión</a></td>
			</tr>
		</table>
		<hr style="border: 2px solid #791DD5; background-color:#286F2C; height: 5px; width: 90%; margin: 10 auto;"> </hr>
		<marquee width = 62% height = "30" SCROLLAMOUNT = 10 bgcolor = "F3EAEA" direction = left style="position:absolute;top:125px;left:70px;"> 
			<font face = "Verdana", size = 5 , color = black>  ADMINISTRACIÓN DROGUERÍA PPs || <?php echo $_SESSION['Nombre_Usuario']; ?> </font> 
		</marquee>
		<form method=GET action="https://www.google.com/search">
			<TABLE  align =left style="position:absolute;top:98px;right:80px;">
				<tr>
					<td>
						<A HREF="https://www.google.com/webhp?hl=es">
							<IMG SRC="http://img.deusm.com/informationweek/2015/09/1322015/logo_420_color_2x.png" border="0" ALT="Google" align="absmiddle" height= 80 width = 100>
						</A>
						<INPUT TYPE=text name=q size=20 maxlength=255 value="">
						<INPUT TYPE=hidden name=hl value=es>
						<INPUT type=submit name=btnG VALUE="Buscar">	
					</td>
				</tr>
			</TABLE>
		</form>
		<br>
		
		<br>
		<div id = "header">
			<ul class = "nav">
				<li><a href="Administrador.php">Inicio </a></li>
				<li><a href="">Gestionar </a>
						<ul>
							<li><a href="Enfermedades.php">Enfermedades </a></li>
							<li><a href="medicamentos.php">Medicamentos </a></li>
							<li><a href="Gestion_Clientes.php">Usuarios </a></li>
							<li><a href="Anticepticos.html">Administradores </a></li>
						</ul>
				</li>
				<li><a href="">Reportes </a>
						<ul>
							<li><a href="">Usuarios </a>
								<ul>
									<li><a href="\Proyecto\Pagina\Pagina\Reporte_Excel\Reporte_Excel.php">Reporte Excel</a></li>
									<li><a href="\Proyecto\Pagina\Pagina\Reporte_Word\Reporte_Word.php">Reporte word</a></li>
									<li><a href="\Proyecto\Pagina\Pagina\Reporte_PDF">Reporte PDF</a></li>
								</ul>
							</li>
							<li><a href="Accesorios.html">Accesorios </a></li>
							<li><a href="Insumos.html">Insumos </a></li>
							<li><a href="Equipos.html">Equipos </a></li>
						</ul>
				</li>
				<li><a href="">Cuidado personal </a>
						<ul>
							<li><a href="Aseopersonal.html">Aseo personal </a></li>
							<li><a href="Cuidadooral.html">Cuidado oral </a></li>
							<li><a href="Cuidadocapilar.html">Cuidado capilar </a></li>
							<li><a href="Cuidadodepies.html">Cuidado de pies </a></li>
							<li><a href="Saludsexual.html">Salud sexual </a></li>						
						</ul>
				</li>
					<li><a href="Contacto.html">Contacto </a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
	</body>
</html>