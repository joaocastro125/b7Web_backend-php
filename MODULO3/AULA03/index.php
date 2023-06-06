<?php

  // funcão com o valor padrao  para forçar ser um inteiro so colocar no int

  function somar($num1,$num2=10){
    return $num1+$num2;
 }

$result= somar(2);

echo "O RESULTADO É :".$result;