<?php
// datas 

echo date("H:i:s");// mostra a hora minutos e segundos 
echo "<br>";

echo date("d/m/Y");// dia , mes , ano 

echo "<br>";

echo date_default_timezone_set("America/sao paulo"); // onde fica local 

echo "<br>";



// fazer um data formatada 


$data="2023/06/03";

echo date("d/m/Y" , strtotime($data));


echo "<br>";

echo time();// temo sem formatar desde 1970 