<div class="titulo">Tipo Booleano</div>

<?php
echo true, '<br>';
echo false, '<br>';

echo var_dump(true), '<br>';
echo var_dump(false), '<br>';
echo var_dump('false'), '<br>';
echo is_bool(false), '<br>';
echo is_bool('true'), '<br>';

// fazer as regras de conversões
echo '<p>Regras:</p>', '<br>';
echo var_dump((bool) 0), '<br>'; // apenas zero é false
echo var_dump((bool) 20), '<br>';
echo var_dump((bool) -1), '<br>';
echo var_dump((bool) 0.0), '<br>';
echo var_dump((bool) 0.00001), '<br>';
echo var_dump((bool) ""), '<br>'; // false
echo var_dump((bool) "0"), '<br>'; // false
echo var_dump((bool) " "), '<br>'; // todo o resto é true
echo var_dump((bool) "00"), '<br>';
echo var_dump((bool) "false"), '<br>';

echo var_dump(!!"false"), '<br>';