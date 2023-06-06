<?php

  // mesclando variavel->quando for colocar string coloca  aspas duplas se colocar simples o php vai entender como se fosse texto e não como variavel  

  $nome="joao";

  $sobrenome="castro";

  $nomeCompleto=$nome." ".$sobrenome;


  echo $nomeCompleto;


  $nomeCompleto=$nome;
  //concatenação

  $nomeCompleto.=$sobrenome;


   
?>