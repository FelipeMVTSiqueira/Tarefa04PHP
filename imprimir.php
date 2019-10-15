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
    foreach ($_GET as $info=>$espec){
        echo $info." => ".$espec."<br>";
        }
    echo "<br>"."<br>";
    var_dump($_GET);
?>