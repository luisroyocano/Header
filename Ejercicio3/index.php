<html>
    <body>
        <?php
        include("../funciones.php");
        form();
        if(isset($_POST['enviar']) && !empty($_POST['user']) && !empty($_POST['user'])){
            if(!comprobarDatos()) header('Location:error.php');
            else echo "Registrado!";
        }else{
            echo "<p style='color:red'> Rellena todos los campos!</p>";
        }
        ?>
    </body>
</html>