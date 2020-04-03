<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
var_dump(1 +1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // numerador, denominador
echo round(7 / 4), '<br>'; // aredondar
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
echo 7 / 0, '<br>';
echo 7 / 0.000000000001, '<br>';
// echo intdiv(7, 0); # erro! o que for colocado depois não sai
echo 4 ** 2, '<br>';

// Precedência de operadores
//  () => ** => / * % => + -
echo '<p>Precedências</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';
