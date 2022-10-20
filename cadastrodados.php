<?php

    $u = $_POST['usuario'];
    $s = $_POST['senha'];
    $i = $_POST['idade'];
    $sex = $_POST['sexo'];
    $n = $_POST['nacionalidade'];

    $pont = fopen("cadastro.txt","a+");
    

    fwrite($pont,$u,strlen($u));

    fwrite($pont,$s,"12");

    fwrite($pont,$i,"3");

    fwrite($pont,$sex,strlen($sex));

    fwrite($pont,$n,strlen($n));

    fclose($pont);

?>