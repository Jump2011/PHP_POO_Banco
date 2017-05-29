<?php


// @author Junio

class ContaBanco {
    public $numConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($st){
        $this->setTipo($st);
        $this->setStatus(TRUE);
        if ($st == "cc") {
            $this->setSaldo(50);
        }else if($st == "cp"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
          echo '<p>CONTA AINDA POSSUI DINHEIRO, IMPOSSIVEL INCERRA-LA..</p>';
        }elseif($this->getSaldo() < 0){
          echo '<p>CONTA EM DÉBITO, NÃO PODE SER INCERRADA...</p>';
        }elseif ($this->getStatus(FALSE)) {
            echo "<p>CONTA DE ".$this->getDono()." FECHADA COM SUCESSO.</p>";
        } 
    }
    public function depositar($v){
        if ($this->getSaldo()) {
            $this->setSaldo($this->getSaldo() + $v);
        echo "<p> DEPOSITO DE $v NA CONTA DE ".$this->getDono()."</p>";
        }
        
   }
    public function sacar($v){
        if ($this->getSaldo() >= 0) {
            $this->setSaldo($this->getSaldo() -$v);
        echo "<p>SAQUE DE $v AUTORIZADO NA CONTA DE " .$this->getDono()."</p>";
        } else {
        echo '<p>IMPOSSIVEL FAZER SAQUE, SALDO INSUFICIENTE...</p>';    
        }    
    }
    
    
    public function pagarMensal(){
           if($this->getTipo() == "cc"){
        $v = 12;    
        } else if($this->getTipo() == "cp"){
        $v = 20;        
        }
        if($this->getStatus()){
               $this->setSaldo($this->getSaldo()- $v);
                echo "<p>MENSALIDADE DE R$ $v DEBITADA NA CONTA DE ".$this->getDono()."</p>";
            }else {
               echo '<p>PROBLEMAS NA CONTA NÃO POSSO COBRAR...</p>'; 
            }
    
    }

    public function ContaBanco(){
        $this->setSaldo(0);
        $this->setStatus(TRUE);
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}
