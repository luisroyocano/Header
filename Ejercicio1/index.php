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
                if($user == $nombre && $password == $clave){
                    header('Location:verdatos.php');
                }
            }
            header('Refresh:10;url=index.php');
            echo "<p>Le estamos redirigiendo a la página principal,<br>
                    espere 10 segundos o pulse <a href='http://localhost/Header/Ejercicio1/index.php'>aqui</a></p>";
        }
        ?>
    </body>
</html>