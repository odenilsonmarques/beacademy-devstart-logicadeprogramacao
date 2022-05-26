<!-- Crie um programa que receba do usuário um
número e apresente a Tabuada deste -->

<form action="" method="POST">
    <fieldset>
        <legend>APLICAÇÃO DE DESCONTO</legend>
        INFORME O VALOR DO SALARIO
        <input type="text" name="valorSalario"><br><br>
        <input type="submit" value="CALCULAR">
    </fieldset>
</form><br>


<?php
$valorSalario = filter_input(INPUT_POST,'valorSalario');

if($valorSalario){

    switch ($valorSalario){
        case ($valorSalario < 1.212):
            $valorDesconto = ($valorSalario * 7.5 / 100);
            $valorLiquido = $valorSalario - ($valorSalario * 7.5 / 100);
    
            echo "valor do salario bruto ".$valorSalario."<br><br>";
            echo "valor do desconto ".$valorDesconto."<br><br>";
            echo "valor do salario liquido ".$valorLiquido."<br><br>";
        break;
    
        case ($valorSalario == 1.212 || $valorSalario < 2.427):
            $valorDesconto = ($valorSalario * 9 / 100);
            $valorLiquido = $valorSalario - ($valorSalario * 9 / 100);
    
            echo "valor do salario bruto ".$valorSalario."<br><br>";
            echo "valor do desconto ".$valorDesconto."<br><br>";
            echo "valor do salario liquido ".$valorLiquido."<br><br>";
        break;

        case ($valorSalario == 2.427 || $valorSalario < 3.641):
            $valorDesconto = ($valorSalario * 12 / 100);
            $valorLiquido = $valorSalario - ($valorSalario * 12 / 100);
    
            echo "valor do salario bruto ".$valorSalario."<br><br>";
            echo "valor do desconto ".$valorDesconto."<br><br>";
            echo "valor do salario liquido ".$valorLiquido."<br><br>";
        break;

        case ($valorSalario == 3.641 || $valorSalario <= 7.087):
            $valorDesconto = ($valorSalario * 12 / 100);
            $valorLiquido = $valorSalario - ($valorSalario * 12 / 100);
    
            echo "valor do salario bruto ".$valorSalario."<br><br>";
            echo "valor do desconto ".$valorDesconto."<br><br>";
            echo "valor do salario liquido ".$valorLiquido."<br><br>";
        break;
    }

}









