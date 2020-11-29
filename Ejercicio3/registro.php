<html>
    <body>
        <?php
            include("../funciones.php");
            registerForm();
            if(isset($_POST['enter']) && !empty($_POST['userR']) && !empty($_POST['passwordR']) && !empty($_POST['password2R'])){
                if(register()) header("Location:verdatos.php");
                else echo "<p style='color:red'>Nombre de usuario en uso o contraseñas no coinciden</p>";
            }
        ?>
    </body>
</html>