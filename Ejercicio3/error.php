<style>
    a{
        text-decoration: none;
        color:green;
    }
    a:last-child{
        color:red;
    }
</style>
<?php 
echo "<h3>El usuario no ha podido registrarse.</h3>";
header('Refresh:10;url=index.php');
echo "<a href='http://localhost/Header/Ejercicio3/index.php'>Volver a loggearte</a><br>";
echo "<a href='http://localhost/Header/Ejercicio3/registro.php'>Registrarte</a>";
?>