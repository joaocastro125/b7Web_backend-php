<?php

 // operador spread

 $nomes=[
    "joao ",
    "carlos",
    "marcos"
   ];

   $nomes2=[
    ... $nomes,
    "elias",
    "matheus"

   ];

   echo $nomes2[4];

?>