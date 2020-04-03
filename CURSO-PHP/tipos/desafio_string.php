<div class="titulo">Tipo String</div>

<?php
// Enunciado:
// Avaliando os métodos da documentação da string,
// qual e o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

// Encontra a posição da primeira ocorrência de uma string
$mystring = '!AbcaBcabc';
$findme   = 'abc';
$pos = strpos($mystring, $findme);
if ($pos === false) {
    echo "A string '$findme' não foi encontrada na string '$mystring'";
} else {
    echo "A string '$findme' foi encontrada na string '$mystring'";
    echo " e existe na posição $pos";
}

echo '<br>';

// Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas
$mystring = '!AbcaBcabc';
$findme   = 'abc';
$pos = stripos($mystring, $findme);
if ($pos === false) {
    echo "A string '$findme' não foi encontrada na string '$mystring'";
} else {
    echo "A string '$findme' foi encontrada na string '$mystring'";
    echo " e existe na posição $pos";
}
