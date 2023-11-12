<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 10, 
    'Roberto' => 7,
];

/* retorna um array contendo todos elementos do primeiro 
parametro que não estejam nos próximos arrays, porém
só leva em consideração os valores, não as chaves. Para levar em conta a chava
usaremos _key. Para saber diferenças levando em considerações values e keys, 
usamos _assoc */

$alunosFaltantes = (array_diff_key($notasBimestre1, $notasBimestre2));

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));

array_keys($alunosFaltantes);
(array_values($alunosFaltantes));
?>
