<form action="" method="POST">
    <fieldset>
        <legend>CLASSIFICAÇÃO</legend>
        idade
        <input type="text" name="idade">
        <input type="submit" value="Enviar">
    </fieldset>
</form>

<?php
    $idade = filter_input(INPUT_POST,'idade');

    if($idade){
        echo "IDADE INFORMADA ".$idade."<br>";

        if($idade < 18){
            echo "MENOR DE IDADE"."<br>";
        }else if($idade > 18 && $idade <= 60){
            echo "ADULTO"."<br>";
        }
        else{
            echo "IDOSO"."<br>";
        }
    }
?>
