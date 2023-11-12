<?php

$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane',
];

/* serve para unir uma ou mais arrays, porém não preserva as keys */
$alunos2022_merge = array_merge($alunos2021, $novosAlunos);

/* esse "+" representa uma união entre os arrays
caso não tenha nenhuma chave nos arrays, esse operador vai
sobrescrever os values que tem a mesma chave no segundo array */

$alunos2022 = $alunos2021 + $novosAlunos;

/* "..." (spread operator or unpacking operator) desempacota o array e traz 
os valores e keys separadamente, possuí o mesmo comportamento do array_merge, 
porém pode ser usado arrays com outros elementos, ao contrário do array_merge */

$alunos2022_unpacking = [...$alunos2021, 'Elemento', ...$novosAlunos];
var_dump($alunos2022_desp)

?>