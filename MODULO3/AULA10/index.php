<?php 

// manipulação de array 

$frase=array("aprendendo"=>"php","node","javascript");


print_r(count($frase)); 



$number=[1,2,3,4,6];


$filter=array_filter($number,function($item){
    if($item<10){
        return true;
    }else{
        return false;
    }
});

var_dump($filter);



$mapeando=array_map(function($item){
    return $item*2;
},$number);



var_dump($mapeando);



// faz a dirença de dois array 
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");

$result=array_diff($array1,$array2);

print_r($result);


// array_pop , in_array , array_seach , array_sort 

// remove a ultima posição
var_dump(array_pop($number));
//faz uma verificação se existe 
if(in_array(3,$number)){
    echo "existe";
}else{
echo "não existe";
}

//Pesquisa o array para um determinado valor e retorna a primeira chave correspondente se for bem-sucedido
$pesquisa=(array_search(0,$number));
var_dump($pesquisa);


$desordenado=[9,8,7,6,5];
// ordenado 
// sort($desordenado);
// forma decresente 
rsort($desordenado);
//Classifica um array em ordem decrescente e mantém a associação de índice
arsort($desordenado);


print_r($desordenado);

