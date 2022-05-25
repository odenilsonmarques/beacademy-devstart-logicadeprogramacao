<!-- 
    
Crie um programa que permita ao usuário escolher a
operação a realizar (depósito ou saque), receba a
informação da operação escolhida e o valor do
usuário e, em seguida, atualize o seu saldo. Ao final
exiba o valor inicial, a operação realizada e o saldo
atual. 

-->

<form action="" method="POST">
    <fieldset>
        <legend>SALDO BANCARIO</legend>
        OPERAÇÃO
        <select name="operacao">
            <option>SELECIONE</option>
            <option value="DEPOSITAR">DEPOSITAR</option>
            <option value="SACAR">SACAR</option>
        </select>
        VALOR
        <input type="number" name="valor"><br><br>
        <input type="submit" value="Enviar">
    </fieldset>
</form><br>

<div id="informacoes">
    <h4>------Extrato Atual------</h4>
    <?php
        $saldoInicio = 110;
        $operacao = filter_input(INPUT_POST,'operacao');
        $valor = filter_input(INPUT_POST,'valor'); 

        echo "DATA ".date('d-m-Y')."<br>";
        echo "SALDO INICIAL $".$saldoInicio."<br>";

        if($operacao && $valor){
            if($operacao == 'DEPOSITAR'){
                echo "OPERAÇÃO ".$operacao."<br>";
                Echo "VALOR DEPOSITADO $".$valor."<br>";
    
                $saldoAtualizado = $saldoInicio + $valor;
                Echo "SALDO ATUALIZADO $".$saldoAtualizado."<br>";
            }else if($operacao == 'SACAR'){
                echo "OPERAÇÃO ".$operacao."<br>";
                Echo "VALOR SACADO $".$valor."<br>";
    
                $saldoAtualizado = $saldoInicio - $valor;
                Echo "SALDO ATUALIZADO $".$saldoAtualizado."<br>";
            }
        }
    ?>
</div>

<style>
    #informacoes{
        border: 1px solid #ccc;
        height: 300px;
        width: 250px;
    }
    h4{
        text-align:center;
    }
</style>