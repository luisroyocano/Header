<html>
    <body>
        <?php
        require_once("../funciones.php");
        form();
        if(isset($_POST['enviar'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            include("datos.php");
            foreach($usuarios as $nombre => $clave){
                if($user != $nombre && $password != $clave){
                    header('Location:error.php');
                }
            }
            echo "Registrado!";
            
        }
        ?>
    </body>
</html>