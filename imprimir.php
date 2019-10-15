<!DOCTYPE HTML>
<html>
    <body>
        <form action="imprimir.php" method="post">
            Nome: <input type="text" name="nome"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php 
    foreach ($_POST as $info=>$espec){
        echo $info." => ".$espec."<br>";
        }
    echo "<br>"."<br>";
    var_dump($_POST);
    //Temos de modificar o method, e todas as váriaveis $_GET pela variável $_POST
?>
