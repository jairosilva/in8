<?php

$siglasUfs = ['ES', 'MG', 'RJ', 'SP'];
$nomesUfs = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

$siglasNomes = array_combine($siglasUfs, $nomesUfs);

array_map(function ($sigla, $nome) {
    echo ($sigla . ' - ' . $nome . "\n");
}, array_keys($siglasNomes), $siglasNomes);

?>