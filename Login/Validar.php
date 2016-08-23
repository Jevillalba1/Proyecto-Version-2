<?php
session_start();
include('lol.php');

class sesiones
{
    private $login;
    private $connection;
}

if(isset($_SESSION['username'])):
    echo '<font face="Times New Roman" color="white" size=4>Estas logeado <button><a href=".../Index.html">Cerrar sesi&oacuten</button></font></a>';
else:
    if(isset($_POST['login'])):
        if(strlen($_POST['Id_Usuario']) > 20):
            echo 'El usuario no puede tener mas de 20 caracteres';
        elseif(strlen($_POST['password']) > 20):
            echo '<font face="Times New Roman" color="white" size=4>La contraseña no puede tener mas de 20 caracteres</font>';
        else:
            $login = $connection->prepare("SELECT Id_Usuario, Contrasena FROM registro WHERE Id_Usuario=:Id_Usuario AND Contrasena=:password");
            $login->bindParam(':Id_Usuario',$_POST['Id_Usuario']);
            $login->bindParam(':password',$_POST['password']);
            $login->execute();
            if($login = $login->fetch(PDO::FETCH_ASSOC)):
                $_SESSION['Id_Usuario'] = $_POST['Id_Usuario'];
                header('Location:\Proyecto\Pagina\Pagina');
            else:
                $login = $connection->prepare("SELECT Nombre_Usuario, Contrasena FROM administrador WHERE Nombre_Usuario=:Id_Usuario AND Contrasena=:password");
                $login->bindParam(':Id_Usuario',$_POST['Id_Usuario']);
                $login->bindParam(':password',$_POST['password']);
                $login->execute();
                if($login = $login->fetch(PDO::FETCH_ASSOC)):
                $_SESSION['Nombre_Usuario'] = $_POST['Id_Usuario'];
                header('Location:\Proyecto\Pagina\Pagina\Administrador.php');
                endif;
            endif;
        endif;
    endif; 
endif;
echo 'Datos incorrectos o el nombre de usuarion no existe, vuelve a intentar.! </font></br>';
header("Refresh: 2; URL=index.php");
?>