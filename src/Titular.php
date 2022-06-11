<?php


class Titular
{
    private string $nome;
    private string $cpf;
    
    public function __construct($nome, $cpf)
    {
        $this->validacpf($nome);
        $this->nome = $nome;
        
        $this->cpf = $cpf;
        
    }
    private function validacpf(string $nome): void
    {
        if (strlen($nome) < 5){
            echo 'nome inválido !';
            exit();
        }
    }
    public function recuperaNomeTitular(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf;
    }
    
}