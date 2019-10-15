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
            Selecione seu gênero<br>
            <div>
                <input type="radio" name="sexo" value="Masculino">
                <label for="sexo">Masculino</label>
            </div>
            <div>
                <input type="radio" name="sexo" value="Femnino">
                <label for="sexo">Feminino</label>
            </div>
            <div>
                <input type="radio" name="sexo" value="seila">
                <label for="sexo">Não revelar</label>
            </div>
            <label for="sono">Dormistes bem esta noite, meu anjo?</label>
            <select name="sono">
                <option disabled selected>Escolher:</option>
                <option value="1">Não.</option>
                <option value="2">Se EU dormi bem?! Cê sabe que horas são?</option>
                <option value="3">Baaaisobeeeenos, baisomenos...</option>
                <option value="4">Você pode repetir a pergunta?(Enquanto boceja)</option>
                <option value="5">Eu sempre durmo bem, o problema é acordar</option>
                <option value="6">Dormi.</option>
                <option value="7">To descansadão!</option>
                <option value="8">Urso</option>
                <option value="9">Garfield</option>
                <option value="10">Snorlax</option>
            </select><br>
            <input type="checkbox" name="termos" value="aceito">
            Eu concordo com os <a href=# rel=#>Termos e Condições</a>.<br>
            <input type="submit">
        </form>
    </body>
    <br><br>
</html>

<?php 
    foreach (getallheaders() as $info=>$espec){
        echo $info." => ".$espec."<br>";
        }
    echo "<br>"."<br>";
    var_dump($_ENV);
    //testando com variável global $_ENV mandando um submit vazio
?>
