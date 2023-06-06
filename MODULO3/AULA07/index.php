<?php
  // uma funcao recurso ele exerculta ela mesma internamente 
  function dividir($numero){

    $metade=$numero/2;
    echo $metade."<br>";
     if(round($numero)>0){
      dividir($metade);

      
      }
    }
  
  

  dividir(100);
    

    
?>