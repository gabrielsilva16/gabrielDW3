<?php
    
    //Classe Aluno
    Class Aluno {

     //os atributos e métodos vão dentro das chaves{}
    private $idAluno;
     private $nome;

    

    //são os métodos de acesso que vão permitir que outras classes acessem esses atributos
    //get é pegar o valor 
    //get sempre começa minusculo 
    
    public function getNome(){
        return $this-> $nome;
    }
    
    //set é atribuir o valor
    public function setNome($nome){
        $this->$nome = $nome;
    }

    public function getidAluno(){
        return $this-> $idAluno;
    }

    public function setidAluno($idAluno){
        $this->$idAluno = $idAluno;
    }

}

    echo "oi";
    //instanciando uma classe = criando um novo objeto
    $aluno = new Aluno();
    $aluno->setidAluno(2);
    $aluno->setNome("Rogério");

    $taua = new Aluno();
    $taua-> setidAluno(7);
    $taua->setNome("Tauã");

    echo $aluno->getNome("Tauã");


?>