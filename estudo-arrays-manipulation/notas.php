<?php

$notas = [
    'Maria' => 10,
    'João' => 8,
    'Junior' => 9,
    'Vinicius' => 7,
    'Gustavo' => 6
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

// array_key_exists('chave', $array) = verifica se a chave existe

echo 'Vinicius fez a prova: ' .PHP_EOL;
var_dump(isset($notas['Vinicius']));       // verifica se a chave existe e não é nula

echo 'Alguém tirou 10? ' .PHP_EOL;         /// verifica se o valor existe
var_dump(in_array(10, $notas, true));    // true serve pra o php não usar "==", mas sim "===", tornando a consulta mais strict

echo "Quem tirou 10?" .PHP_EOL;
echo array_search(10, $notas, true);              // busco o valor "10" dentro do meu array "$notas", aqui tb pode-se usar o strict

