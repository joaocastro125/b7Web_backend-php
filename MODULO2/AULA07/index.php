<?php
  $numeros=[1,2,5,7,8];

  foreach($numeros as $numero){
    echo "Numero :".$numero."<br>";
  }

  echo "============================"."<br>";
  echo "<h1>LISTA DE NUMEROS:</h1>";
  
  foreach($numeros as $key=>$numero){
    echo "<ul>";
    echo "<li>"."index=>".$key." numero =>".$numero."</li>"."<br>";
    echo "</ul>";
  }

?>