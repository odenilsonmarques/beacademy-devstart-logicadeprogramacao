
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
        echo "O seu nome é ".$nome." e voce tem ".$idade." anos";
    }
?>
