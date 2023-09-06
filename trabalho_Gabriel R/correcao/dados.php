<?php

    include ("function.php");
    
    $nome = $_POST['txtNome'];
    $n1 = $_POST['txtN1'];
    $n2 = $_POST['txtN2'];
    $n3 = $_POST['txtN3'];
    $n4 = $_POST['txtN4'];

    $resultado = media ($n1, $n2, $n3, $n4);

    echo verificaMedia("$resultado");

?>