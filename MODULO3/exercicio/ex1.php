<?php
//  retorna data 


function Data(){
    $dataFormatada="2023/06/4";
    $dataAtual=date("N",strtotime($dataFormatada));
    switch($dataAtual){
        case $dataAtual==1:
            echo "segunda-feira"." - ".$dataFormatada;
            break;
        case $dataAtual==2:
            echo "terça-feira"." - ".$dataFormatada;
            break;
            case $dataAtual==3:
            echo "quarta-feira"." - ".$dataFormatada;
            break;
            case $dataAtual==4:
            echo "quita-feira"." - ".$dataFormatada;
            break;
            case $dataAtual==5:
            echo "sexta-feira"." - ".$dataFormatada;
            break;
            case $dataAtual==6:
            echo "sabado"." - ".$dataFormatada;
            break;
            case $dataAtual==7:
            echo "domingo"." - ".$dataFormatada;
             break;
            default:
            echo "data invalida";

    }
   


}


 Data();