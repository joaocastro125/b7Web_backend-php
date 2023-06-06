<?php

// fica armazenado tudo na mesma variavel -> por rerefencia o valor fica travado sem ter alteração
function soma(&$x){
    echo $x;
}




function  &soma2($x1){
    echo $x1;
}


soma2(6);
soma(2);
soma2(8);
