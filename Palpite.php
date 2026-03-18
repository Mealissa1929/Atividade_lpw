<?php

class Palpite{
    private string $nome;
    private string $link;

    public function __construct($n, $l)
    {
        $this->nome = $n;
        $this->link = $l;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }
}