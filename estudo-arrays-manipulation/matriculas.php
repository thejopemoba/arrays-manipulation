<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

/* serve para unir uma ou mais arrays, porém não preserva as keys */

$alunos2022 = array_merge($alunos2021, $novosAlunos); 
var_dump($alunos2022);

?>