<!DOCTYPE HTML>
<html>
    <body>
        <form action="imprimir.php" method="post">
            Nome: <input type="text" name="nome"><br>
            E-mail: <input type="text" name="email"><br>
            Como ficou sabendo deste site?<br>
            <div>
                <input type="checkbox" name="caminho" value="amigo">
                <label for="caminho">Um amigo me contou!</label>
            </div>
            <div>
                <input type="checkbox" name="caminho" value="google">
                <label for="caminho">Encontrei no Google!</label>
            </div>
            <div>
                <input type="checkbox" name="caminho" value="naosei">
                <label for="caminho">Sem querer... mas resolveu!</label>
            </div>
            <div>
                <input type="checkbox" name="caminho" value="nervosinho">
                <label for="caminho">Não é da sua conta, inxirido!</label>
            </div>
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
