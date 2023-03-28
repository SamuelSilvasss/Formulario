<?php
//Importação
require_once("pessoa.class.php");

class Teste{
    //objeto pessoa com a visibilidade privada
    private $pessoa;

    public function __construct(){
        //Objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();
        //Passar um valor para o método setNome
        $pessoa->setNome($_POST['nome']);
        //Imprimir o valor do método getNome
        echo $pessoa->getNome(). "<br>";

        //Passar um valor para o método setEndereco
        $pessoa->setTelefone($_POST['telefone']);
        //Imprimir o valor do método getEndereco
        echo $pessoa->getTelefone(). "<br>";

        //Passar um valor para o método setBairro
        $pessoa->setOrigem($_POST['origem']);
        //Imprimir o valor do método getBairro
        echo $pessoa->getOrigem(). "<br>";

        //Passar um valor para o método setCep
        $pessoa->setDataContato($_POST['datacontato']);
        //Imprimir o valor do método getCep
        echo $pessoa->getDataContato(). "<br>";

         //Passar um valor para o método setCidade
         $pessoa->setObservacao($_POST['observacao']);
         //Imprimir o valor do método getCidade
         echo $pessoa->getObservacao(). "<br>";
        
    }
    //Instância
}new Teste();

?>