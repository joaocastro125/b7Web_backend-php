<?php


$lista=[
    "nome"=>"joao castro",
    "idade"=>90,
    "atributos"=>[
        "forca"=>60,
        "agilidade"=>80,
        "despresa"=>50
    ],
    'vida'=>100,
    'mana'=>928
];

echo "NOME: ".$lista['nome']."<br>";
echo "FORCA: ".$lista['atributos']['forca'].'<br>';
var_dump([$lista['atributos']['forca'],$lista['vida']]);




?>