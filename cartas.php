<?php

class Carta{

    private $numero;
    private $nome;
    private $desenho;

    public function __toString()
    {
        $carta = $this->desenho . $this->nome . "\n";

        return $carta;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDesenho()
    {
        return $this->desenho;
    }

    public function setDesenho($desenho)
    {
        $this->desenho = $desenho;

        return $this;
    }
}

$carta1 = new Carta();
$carta1->setNumero(7);
$carta1->setNome("7 de espadas");
$carta1->setDesenho(" \u{1F0A7}  ");

print $carta1;