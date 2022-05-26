<!-- Crie um programa que receba do usuário um
número e apresente a Tabuada deste -->

<form action="" method="POST">
    <fieldset>
        <legend>CALCULO DA ÁREA E DO PERÍMETRO</legend>
        INFORME O VALOR DO RAIO
        <input type="number" name="valorRaio"><br><br>
        <input type="submit" value="ACESSAR">
    </fieldset>
</form><br>


<?php
$valorRaio = filter_input(INPUT_POST,'valorRaio');
$pi = 3.1416;

if($valorRaio){
    if($valorRaio < 1){
        echo "Erro! Por favor informe um valor positivo";
    }
    else{
        $calculoArea = $pi * $valorRaio * $valorRaio;
        $calculoPerimetro = 2 * $pi * $valorRaio;

        echo "o valor da area é ".$calculoArea."<br><br>";
        echo "o valor da perimetro é ".$calculoPerimetro."<br>";
    }
}






