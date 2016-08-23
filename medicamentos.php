<?php
session_start();
require_once 'medicamentos.entidad.php';
require_once 'medicamentos.model.php';

$alm = new Medicamentos();
$model = new MedicamentosModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('Id',               $_REQUEST['Id']);
            $alm->__SET('Nombre',           $_REQUEST['Nombre']);
            $alm->__SET('Tipo',             $_REQUEST['Tipo']);
            $alm->__SET('Via_Consumo',      $_REQUEST['Via_Consumo']);
            $alm->__SET('Precio_Unitario',  $_REQUEST['Precio_Unitario']);
            $alm->__SET('Cantidad',         $_REQUEST['Cantidad']);
            $alm->__SET('Ubicacion',        $_REQUEST['Ubicacion']);

            $model->Actualizar($alm);
            header('Location: medicamentos.php');
            break;

        case 'registrar':
            $alm->__SET('Id',               $_REQUEST['Id']);
            $alm->__SET('Nombre',           $_REQUEST['Nombre']);
            $alm->__SET('Tipo',             $_REQUEST['Tipo']);
            $alm->__SET('Via_Consumo',      $_REQUEST['Via_Consumo']);
            $alm->__SET('Precio_Unitario',  $_REQUEST['Precio_Unitario']);
            $alm->__SET('Cantidad',         $_REQUEST['Cantidad']);
            $alm->__SET('Ubicacion',        $_REQUEST['Ubicacion']);

            $model->Registrar($alm);
            header('Location: medicamentos.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['Id']);
            header('Location: medicamentos.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['Id']);
            break;
    }
}
?>
<html>
    <Title> Gestión de medicamentos </title>
    <head  profile="http://www.w3.org/2005/10/profile">
        <meta charset="utf-8">
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
            <font face = "Verdana", size = 5 , color = black> GESTIÓN DE MEDICAMENTOS </font> 
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
                <li><a href="Administrador.php">Inicio </a></li>
                <li><a href="">Gestionar </a>
                        <ul>
                            <li><a href="Enfermedades.php">Enfermedades </a></li>
                            <li><a href="Analgesicos.html">Medicamentos </a></li><li><a href="Antibioticos.html">Usuarios </a></li>
                            <li><a href="Anticepticos.html">Administradores </a></li>
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
        <br>
        <br>
        <br>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <div class="pure-g" >
            <div class="pure-u-1-12">
                <form action="?action=<?php echo $alm->Id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <table>
                        <tr>
                            <th >Id de enfermedad</th>
                            <td><input type="text" name="Id" value="<?php echo $alm->__GET('Id'); ?>" required /></td>
                        </tr>
                        
                            <th >Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $alm->__GET('Nombre'); ?>" required /></td>
                        </tr>
                        <tr>
                            <th >Tipo</th>
                            <td><input type="text" name="Tipo" value="<?php echo $alm->__GET('Tipo'); ?>" required /></td>
                        </tr>
                        <tr>
                            <th >Via de consumo</th>
                            <td><input type="text" name="Via_Consumo" value="<?php echo $alm->__GET('Via_Consumo'); ?>" required  /></td>
                        </tr>
                        <tr>
                            <th >Precio Unitario</th>
                            <td><input type="text" name="Precio_Unitario" value="<?php echo $alm->__GET('Precio_Unitario'); ?>" required  /></td>
                        </tr>
                        <tr>
                            <th >Cantidad</th>
                            <td><input type="text" name="Cantidad" value="<?php echo $alm->__GET('Cantidad'); ?>" required  /></td>
                        </tr>
                        <tr>
                            <th >Ubicación</th>
                            <td><input type="text" name="Ubicacion" value="<?php echo $alm->__GET('Ubicacion'); ?>" required  /></td>
                        </tr>
                         <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
        </br>
                </form> 
                    <table class="pure-table pure-table-horizontal" width="1000px" BGCOLOR="#22F8BC">
                        <thead>
                            <tr>
                                <th >Id de medicamentos</th>
                                <th >Nombre</th>
                                <th >Tipo</th>
                                <th >Via de consumo</th>
                                <th >Precio unitario</th>
                                <th >Cantidad</th>
                                <th >Ubicacion</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php foreach($model->Listar() as $r): ?>
                            <tr>
                                <td align="center" width="50px"><?php echo $r->__GET('Id'); ?></td>
                                <td align="center"><?php echo $r->__GET('Nombre'); ?></td>
                                <td align="center"><?php echo $r->__GET('Tipo'); ?></td>
                                <td align="center"><?php echo $r->__GET('Via_Consumo'); ?></td>
                                <td align="center"><?php echo $r->__GET('Precio_Unitario'); ?></td>
                                <td align="center"><?php echo $r->__GET('Cantidad'); ?></td>
                                <td align="center"><?php echo $r->__GET('Ubicacion'); ?></td>
                                <td>
                                    <a href="?action=editar&Id=<?php echo $r->Id; ?>">Editar</a>
                                </td>
                                <td>
                                    <a href="?action=eliminar&Id=<?php echo $r->Id; ?>">Eliminar</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </table>     
            </div>
    </body>
</html>