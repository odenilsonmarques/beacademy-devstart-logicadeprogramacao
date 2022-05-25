
<form action="" method="POST">
    <fieldset>
        <legend>Formulario</legend>
        Nome
        <input type="text" name="nome">
        idade
        <input type="text" name="idade">
        <input type="submit" value="Enviar">
    </fieldset>
</form>

<?php
    $nome = filter_input(INPUT_POST,'nome');
    $idade = filter_input(INPUT_POST,'idade');

    if($nome && $idade){
        echo "O seu nome é ".$nome." e voce tem ".$idade." anos"."<br>";

        if($idade > 18){
            echo "Verdadeiro"."<br>";
        }else{
            echo "falso"."<br>";
        }
        if($idade != 25 && $nome == "marcos"){
            echo "Falso"."<br>";
        }else if($idade != 25 || $nome == "marcos"){
            echo "Verdadeiro"."<br>";
        }
        if(($idade % 2) == 0){
            echo "Verdadeiro"."<br>";
        }else{
            echo "Falso"."<br>";
        }
    }
?>
