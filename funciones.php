<?php
    $server = $_SERVER['PHP_SELF'];
    function form(){
        global $server;
    echo '
        <form action="'.$server.'" method="POST">
            <label>Usuario</label><br>
            <input type="text" name="user"/><br>
            <label>Contraseña</label><br>
            <input type="password" name="password"/><br>
            <input type="submit" value="Enviar" name="enviar"/><br>
        </form>
    ';
    }
    function registerForm(){
        global $server;
        echo '
        <form action="'.$server.'" method="POST">
        <text>Nombre usuario</text><br>
        <input type="text" name="userR"><br>
        <text>Contraseña</text><br>
        <input type="password" name="passwordR"><br>
        <text>Repetir contraseña</text><br>
        <input type="password" name="password2R"><br>
        <text>Correo electr&oacutenico</text><br>
        <input type="email" name="email"><br><br>
        <input type="submit" value="Registrarme" name="enter">
        </form>
        ';
    }

    function comprobarDatos(){
        $userForm = $_POST['user'];
        $password = $_POST['password'];
        $uspass = file_get_contents("datos.txt");
        $users = explode(",",$uspass);
        foreach($users as $verificated){
            $user = explode(" => ", $verificated);
            if($userForm === $user[0] && $password === $user[1]) return true;
        }
        return false;
    }

    function register(){
        $newUser = $_POST['userR'];
        if($_POST['passwordR'] !== $_POST['password2R']) return false; 
        else $password = $_POST['passwordR'];
        $uspass = file_get_contents("datos.txt");
        $users = explode(",",$uspass);
        foreach($users as $verificated){
            $user = explode(" => ", $verificated);
            if($newUser === $user[0]) return false;
        }
        array_push($users,"$newUser => $password");
        file_put_contents("datos.txt",implode(",",$users));
        return true;
    }
?>