<html>
    <head profile="http://www.w3.org/2005/10/profile">
        <title>Analg�sicos</title>
        <link rel="icon" type="image/png" href="../9.png">
        <link rel="stylesheet" type="text/css" href="../Style.css"> 
    </head>
    <body background = "../8.PNG">
        <table>
            <tr>
                <td><a href="Index.html"><IMG SRC="../2.png" height = 70 width= 170 Hspace = 10 Vspace = 1 > </a></td>
                <td><marquee  width = "900px" height = "60" behavior=slide aling=top scrollamount = 10 bgcolor = red> 
                <font face = "Verdana", size = 20 , color = white> Droguer�a PPs </font>
                </marquee></td>
                <td><a href="\Proyecto\Pagina\Pagina\Login\" class="myButton">Iniciar Sesi�n</a></td>
				<td><a href="\Proyecto\Pagina\Pagina\Registro.php" class="myButton">Registrarse</a></td>
            </tr>
        </table>
        <hr style="border: 2px solid #791DD5; background-color:#286F2C; height: 5px; width: 90%; margin: 10 auto;"> </hr>
        <marquee width = 62% height = "30" SCROLLAMOUNT = 10 bgcolor = "F3EAEA" direction = left style="position:absolute;top:125px;left:70px;"> 
            <font face = "Verdana", size = 5 , color = black> ANALG�SICOS </font> 
        </marquee>
        <form method=GET action="https://www.google.com/search">
            <TABLE  align =left style="position:absolute;top:105px;right:65px;">
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
                <li><a href="index.html">Inicio </a></li>
					<li><a href="">Medicamentos </a>
							<ul>
								<li><a href="Mucoliticos.html">Mucoliticos </a></li>
								<li><a href="Antibioticos.html">Antibioticos </a></li>
								<li><a href="Anticepticos.html">Anticepticos </a></li>
								<li><a href="Laxantes.html">Laxantes </a></li>
								<li><a href="Antihistaminicos.html">Antihistam&iacutenicos </a></li>
								<li><a href="Broncodilatadores.html">Broncodilatadores </a></li>				
							</ul>
					</li>
					<li><a href="">Dispositivos Medicos </a>
							<ul>
								<li><a href="Botiquin.html">Botiquin </a></li>
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
        </br>
        </br>
	</body>
</html>
<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="proyecto";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from medicamentos where Tipo='Analgesico' order by Id";
$query=$conexion->query($sql);

            


// cuando se agregue c�digo a la variable cambiar la comilla doble por comilla sencilla
// dentro del c�digo


$tbHtml="";
            

    
    if($query->num_rows>0){
        
            echo "<center><table class='tabla'>
             <header>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Medicamento</th>
                  <th>Tipo</th>
                  <th>Via de Consumo</th>
                  <th>Precio unitario</th>
         
                  </tr>
            </header>";
          
        
        while($res=$query->fetch_array())
        {
            $a=$res['Ubicacion'];   
            $b="<img src='$a' width='120' height='120' alt='' border='0'";
            $c= $b;
            
            

        
         echo '<tr>
        <td>'.$res['Id'].'</td>
        <td>'.$res['Nombre'].'</td>
        <td>'.$c.'</td>
        <td>'.$res['Tipo'].'</td>
        <td>'.$res['Via_Consumo'].'</td>
        <td>'.$res['Precio_Unitario'].'</td>
        
    </tr>
    ';
        }
        $tbHtml.= "</table> </center>";
    }
    else
    {
    echo "No hay resultados";
    }
?>