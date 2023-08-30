<?php
    include("Aluno.php");

    //construindo um objeto do tipo aluno
    $objAluno = new Aluno;
    //$objAluno = new Aluno(); $objAluno = new Aluno; essas duas formas estao certas.
    //$objAluno->$nome = "GB";
    $objAluno->setNome("GB");
    echo $objAluno->getNome();
    
    echo"<br>";

    $leticia = new Aluno;
    //$leticia->$nome = "Leticia";
    $leticia->setNome("Leticia");
    echo $leticia->getNome();


?>