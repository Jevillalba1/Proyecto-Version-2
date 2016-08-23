<?php
session_start();
include('lol.php');

class registro
{
    public $user;
    public $connection;
    public $register;

}
if(isset($_SESSION['username'])):
    header('Location: index.php');
else:
    if(isset($_POST['register'])):
        if(empty($_POST['username']) || empty($_POST['password'])):
            echo '<font face="Segoe Print" color="white"> Debes llenar los campos en blanco!. </font>
        <br>';
        elseif(strlen($_POST['username']) > 20):
            echo 'El usuario no puede tener mas de 20 caracteres';
        else:
            $user = $connection->prepare("SELECT nombre FROM users WHERE nombre = :username");
            $user->bindParam(':username',$_POST['username']);
            $user->execute();
            if($user->fetch(PDO::FETCH_ASSOC)):
                echo 'El usuario ya existe';
            elseif(strlen($_POST['password']) > 20):
                echo 'La contraseña no puede tener mas de 20 caracteres';
            elseif($_POST['password'] <> $_POST['password2']):
                echo '<font face="Times New Roman" color="white" size=4> Las contrase&ntildeas no coinciden </font><br>';
            else:
                $register = $connection->prepare("INSERT INTO users(Id,Tipo_Usuario,nombre,password) VALUES ('','Usuario',:username,:password)");
                $register->bindParam(':username',$_POST['username']);
                $register->bindParam(':password',$_POST['password']);
                $register->execute();
                if($register->rowCount() > 0):
                    $_SESSION['username'] = $_POST['username'];
                    header('Location:bienvenida.php');
                else:
                    echo 'Ha ocurrido un error';
                endif;
            endif;
        endif;
    endif;
    echo '<font face="Segoe Print" color="white" size="4">Formulario de registro por favor llena todos los campos.</font>
        <br>
        <br>
    <form action="" method="post">
        <table>
        <tr>
            <td><font face="Segoe Print" color="white">Escriba su nombre de usuario: </font></td>
            <td><input name="username" placeholder="Nombre de usuario"></td>
        </tr>
        <tr>
            <td><font face="Segoe Print" color="white">Escribe tu contrase&ntildea: </font></td>
            <td><input type="password" name="password" placeholder="*******"><td>
        </tr>
        <tr>
            <td><font face="Segoe Print" color="white">Confirma tu contrase&ntildea: </font></td>
            <td><input type="password" name="password2" placeholder="*******"></td>
        </tr>
        <tr>
            <td><input name="register" type="submit" value="Registrarse"></td>
        </tr>
        </table>
    </form>';
endif;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body background="http://www.hdfondos.eu/pictures/2014/0306/1/dark-metallic-pattern-wallpaper-60190.jpg">
</body>
</html>