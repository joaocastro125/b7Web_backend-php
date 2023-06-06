<?php

    // null cao 



    $nomeCompleto=$nome ??'visitante';
    // $nomeCompleto.=isset($sobrenome)?$sobrenome:'';
    $nomeCompleto.=$sobrenome?? '';

    echo $nomeCompleto;
?>