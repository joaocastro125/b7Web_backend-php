<?php 

// funcao string 
// procura separador de string 
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode("-", $pizza);
print_r($pieces);
// converte para string 
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);


echo $comma_separated."<br>";

$space="    hello word    ";

// remove os spaços desnessarios 

echo trim($space);

 // tamanho 
echo strlen($space);


//converte em maiuscolo 
echo strtoupper($space);

// converte em minusculo
echo strtolower($space);


$letra="A";

// faz um troca de valores 
echo str_replace($letra,"A","b");
// faz um corte de string no inicio e final 
echo substr($space,9);

// posição da string

$nomeCompleto="joao castro";
// procura a posição da letra 
$posicao=strpos($nomeCompleto, "z");
if($posicao>-1){
    echo "achou";
}else{
    echo "não achou";
}


// para colocar so a primeira letra em maicusculo ucfirst


// number_format formatar numeros com ,



