<html>
<head  profile="http://www.w3.org/2005/10/profile">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/Proyecto/Pagina/9.png">
    <link rel="stylesheet" type="text/css" href="../Style.css"> 
    <center> 
    </center>
    <title>Iniciar sesión</title>
</head>
<body background = "/Proyecto/Pagina/1.png">
    <table>
        <tr>
            <td><a href="/Proyecto/Pagina/Pagina"><IMG SRC="/Proyecto/Pagina/2.png" height = 70 width= 170 Hspace = 10 Vspace = 1 > </a></td>
            <td><marquee  width = "1050px" height = "60" behavior=slide aling=top scrollamount = 10 bgcolor = red> 
            <font face = "Verdana", size = 20 , color = white>  Droguería PPs </font>
            </marquee></td>
        </tr>
    </table>
     <hr style="border: 2px solid #791DD5; background-color:#286F2C; height: 5px; width: 90%; margin: 0 auto;"> </hr>
    <center><marquee width = 62% height = "30" SCROLLAMOUNT = 10 bgcolor = "F3EAEA" direction = left"> 
            <font face = "Verdana", size = 5 , color = black>  Iniciar Sesión </font> 
    </marquee></center>
    <center>
    <link rel="stylesheet type="text/css" href="style.css">
    <div class="estilo_caja">
    <p class="estilo_titulo">Bienvenido a Droguería PPs logueate para Iniciar </p>
        <form action="Validar.php" method="post">
            <table align="center">
            <tr>
                <td><p class="s">Id de usuario: </p></td>
            </tr>
            <tr>
                <td><input type="text" name="Id_Usuario" placeholder="Id de usuario" required="true" class="caja"></td>
            </tr>
             <tr>
                <td><p class="s">Contraseña: </p></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Contraseña" required="true" class="caja"></td>
            </tr>
            <tr>
                <td><br><center><input name="login" type="submit" value="Iniciar sesión" class="myButton"></center></td>
            </tr>
            <tr>
                <td><br><center><a href="\Proyecto\Pagina\Pagina\Registro.php" class="myButton">Registrate</a></center></td>
            </tr>
            </table>
        </form>
    </div>
    </center>
</body>
</html>