<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); // da 10 porque tem acento
echo '<br>';

// concatenação
echo "Nós também " . 'somos', '<br>'; 
echo "Numero é " . 123, '<br>'; 
echo "Também aceito" , " virgulas", '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\"" . "\\", '<br>';

print("<br>Também existe a função print");
print "<br>Também existe a função print";

//  Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . strlen('Eu também');
echo '<br>' . mb_strlen('Eu também', "utf-8");
echo '<br>' . substr("Só uma parte mesmo", 7, 6); // começando do 7º e vai até ao 6º dando apenas parte
echo '<br>' . substr("Só uma parte mesmo", 7); // começando do 7º e vai até ao fim
echo '<br>' . str_replace("isso", "aquilo", "Troca isso isso"); // 
