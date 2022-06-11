<?php


class Conta
{
    private Titular $titular;
    private float $saldo = 0;
    
    private static $numeroDeContas = 0;
    
    public function __construct($titular)
    {
        $this->titular = $titular;
        
        self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
    public function sacar(float $valor): void
    {
        if ($this->saldo < $valor){
            echo 'saldo indiponivel para sacar'. PHP_EOL;
        }
        $this->saldo -= $valor;
    }
    public function depositar(float $valor): void
    {
        if ($valor <= 0){
            echo 'O valor de deposito deve ser maior do que 0'. PHP_EOL;
        }
        $this->saldo += $valor;
    }
    
    public function transferir(float $valor, Conta $contaDestino):void
    {
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }
    
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
    
    
}