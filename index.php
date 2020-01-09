<!-- GOAL: 
- Definire la classe Persona caratterizzata da nome e cognome
- Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
- Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
- Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
- Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi -->

<?php

class Persona
{
  public $nome;
  public $cognome;

  function __construct($nome, $cognome)
  {
    $this->nome = $nome;
    $this->cognome = $cognome;
  }

  function __toString()
  {
    return "Nome: " . $this->nome . " - " . "Cognome: " . $this->cognome;
  }
}


class Ospite extends Persona
{
  public $anno_nascita;

  function __construct($nome, $cognome, $anno_nascita)
  {
    parent::__construct($nome, $cognome);
    $this->anno_nascita = $anno_nascita;
  }

  function __toString()
  {
    return parent::__toString() . " - Anno: " . $this->anno_nascita;
  }
}


class Pagante extends Persona
{
  public $indirizzo;

  function __construct($nome, $cognome, $indirizzo)
  {
    parent::__construct($nome, $cognome);
    $this->indirizzo = $indirizzo;
  }

  function __toString()
  {
    return parent::__toString() . " - Indirizzo: " . $this->indirizzo;
  }
}

$coso = new Persona("Tizio", "Caio");
echo $coso . "<br>";

$cosetto = new Ospite("Mario", "Rossi", "1986");
echo $cosetto . "<br>";

$cosino = new Pagante("Massimo", "Boni", "via Tal dei Tali 45");
echo $cosino;
