<form action="" method="POST">
    <fieldset>
        <legend>CALCULO IMC</legend>
        Nome
        <input type="text" name="nome">
        Peso
        <input type="text" name="peso" placeholder="62">
        Altura
        <input type="text" name="altura" placeholder="1.62"><br><br>
        <input type="submit" value="Enviar">
    </fieldset>
</form>


<?php

    $nome = filter_input(INPUT_POST,'nome');
    $peso = filter_input(INPUT_POST,'peso');
    $altura = filter_input(INPUT_POST,'altura');

    if($nome && $peso && $altura){
        echo "NOME: ".$nome."<br>";
        echo "PESO: ".$peso."<br>";
        echo "ALTURA: ".$altura."<br>";

        $imc = $peso/($altura * $altura);
        echo "VALOR DO INDICE ".number_format($imc, 5)."<br>";

        switch($imc){
            case ($imc < 18):
                echo 'ABAIXO DO PESO';
            break;

            case ($imc > 18 && $imc <= 24):
                echo 'PESO NORMAL';
            break;

            case ($imc == 25 && $imc <= 29):
                echo 'SOBRE PESO';
            break;

            case ($imc > 30):
                echo 'OBESIDADE';
            break;
        }
    }
?>