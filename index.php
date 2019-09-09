<?php

    /**
     * DESAFIO #27 @nextgencoder
     * Write a program wich will take one number from 1 to 50
     * as input and converts it into roman numbers (in higher-case letters)
     */

    $ru = array( 1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V', 6 => 'VI', 7 => 'VII', 8 => 'VIII', 9 => 'IX');
    $rd = array( 1 => 'X', 2 => 'XX', 3 => 'XXX', 4 => 'XL', 5 => 'L');

    if (!empty($_POST)):
        $number = $_POST['number'];
        if ($number > 50 || $number < 1) :
            echo "<p style='color:red'><strong>Erro</strong>: O número precisa estar entre 1 e 50.</p>";
        else:
            $n = str_split($number);
            $r = array_reverse($n);
            echo "Seu número em romanos é: " . $rd[$r[1]] . $ru[$r[0]];
        endif;
    endif;
?>

<form action="" method="post">
    <p>Informe um número ente 1 e 50:</p>
    <input type="text" name="number" placeholder="Insira um número">
    <button type="submit">Enviar</button>
</form>

