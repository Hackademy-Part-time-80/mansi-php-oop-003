<?php
//Dependency Injection (Iniezione di Dipendenza)
//Composition (Composizione)

// Devo realizzare un Blog

require 'class.php';

class Ricetta
{
    public string $name;
    public string $cover;
    public  $category;

    public function __construct($name, $cover, Category $ciccio)
    {
        $this->name = $name;
        $this->cover = $cover;
        $this->category = $ciccio->getName();
    }

    public function stampaRicetta()
    {
        echo "Hai selezionato la ricetta $this->name di categoria $this->category \n";
    }
}
$ricetta = new Ricetta('Pasta alla strombolana', 'https://ricette.giallozafferano.it', new Primi());
$ricetta2 = new Ricetta('Pasta alla vesuviana', 'https://ricette.giallozafferano.it', new Antipasti());

$ricetta->stampaRicetta();
$ricetta2->stampaRicetta();
