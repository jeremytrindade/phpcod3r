<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float para it
echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval('11010101101', 2));
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.8));

// operações com string
echo '<p>Strings<p>';
var_dump(3 + "2"); // o PHP sabe que é uma soma logo converte a string num int
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
echo '<br>', is_string("3" + 2);
echo '<br>';
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco"); // pega so a parte inicial e remove o resto
echo '<br>';
echo 1 + "5 cinco"; // vai sempre pegar o inicio da string e ignoar o resto
echo '<br>';
var_dump(1 + "cinco 5");
echo '<br>';
var_dump(1 + "2+5"); // so pega até não ter mais número
echo '<br>';
var_dump(1 + "25");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");