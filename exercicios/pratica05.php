<!-- Crie um programa que receba do usuário um
número e apresente a Tabuada deste -->

<form action="" method="POST">
    <fieldset>
        <legend>TABUADA</legend>
        INFORME UM NUMERO
        <input type="number" name="numero"><br><br>
        <input type="submit" value="Exibir Tabuada">
    </fieldset>
</form><br>


<?php

$n = filter_input(INPUT_POST,'numero');

for($i=1; $i<=10; $i++){
    if($n){ ?>
        <li>
            <?php  echo $n." + ".$i." <span style='color:red'> = </span> "."<span style='color:red;margin-right:30px'>".($n + $i)."</span>"?>
            <?php  echo $n." - ".$i." <span style='color:red'> = </span> "."<span style='color:red;margin-right:30px'>".($n - $i)."</span>"?>
            <?php echo $n." X ".$i." <span style='color:red'> = </span>  "."<span style='color:red;margin-right:30px'>".($n * $i)."</span>"?> 
            <?php  echo $n." / ".$i." <span style='color:red'> = </span> "."<span style='color:red;margin-right:30px'>".($n / $i)."</span>"?>
        </li>
        
 <?php   }
}

