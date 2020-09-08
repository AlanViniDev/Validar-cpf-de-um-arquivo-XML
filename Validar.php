<?php

/* Classe para validar o CPF de um arquivo xml */

class Validar
{

    public $CPF;

    public function ValidarCPF()
    {
        $xml = simplexml_load_file('CPF-XML.xml');

        $aux = (json_encode($xml->cliente->cpf));

        $this->CPF = json_decode($aux,true);
        
        if(strlen(implode($this->CPF)) == 11)
        {
            echo implode($this->CPF);
            echo $retorno = " CPF Valido ";

        }
        else
        {
            echo implode($this->CPF);
            echo $retorno = " CPF Invalido ";

        }

    }

}

$execute = new Validar();
$execute->ValidarCPF();

?>
