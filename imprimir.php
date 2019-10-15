<!DOCTYPE HTML>
<html>
    <body>
        <form action="imprimir.php" method="get">
            Nome: <input type="text" name="nome"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php 
    var_dump ($_GET["email"]);
?>