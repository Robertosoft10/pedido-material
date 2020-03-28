<?php
class Cliente{
    private $codCliente;
    private $cliente;
    private $telefone;
    private $cpf;
    private $endereco;
    private $local;
    
    public function __construct($codCliente=0, $cliente="", $telefone="", $cpf="", $endereco="", $local=""){
        $this->codCliente = $codCliente;
        $this->cliente = $cliente;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->local = $local;
    }
    public function getCodCliente(){
        return $this->codCliente;
    }
    public function setCodCliente($codCliente){
        $this->codCliente = $codCliente;
    }
     public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function getTelefone(){
       return $this->telefone;
   }
   public function setTelefone($telefone){
       $this->telefone = $telefone;
   }
     public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getLocal(){
        return $this->local;
    }
    public function setLocal($local){
        $this->local = $local;
    }
}
?>
