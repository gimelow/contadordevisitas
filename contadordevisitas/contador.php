<?php
    $arquivo= "contador.txt";

    $handle=fopen($arquivo,'r+');
    $data=fread($handle, 512);
    $contador=$data+1;

    print"Você é o visitante número ".$contador;
    fseek($handle,0);
    fwrite($handle,$contador);
    fclose($handle);
?>