<?php

class Car
{

    private $num_telaio = 'originale telaio';
    protected function getNumTelaio()
    {
        return $this->num_telaio;
    }
}

class Fiat extends Car
{

    protected $license;
    protected $name;
    protected $telaio_ereditato;

    public function __construct($string1, $string2)
    {
        $this->license = $string1;
        $this->name = $string2;
        $this->telaio_ereditato = $this->getNumTelaio();
    }
    // public function getName()
    // {
    //     return  $this->name;
    // }

    // public function setName($string)
    // {
    //     return $this->name = $string;
    // }

    public function stampaFrase()
    {
        echo "La mia macchina e' $this->name, con targa $this->license e numero di Telaio $this->telaio_ereditato";
        //echo "La mia macchina e' $this->name, con targa $this->license e numero di Telaio" . $this->getNumTelaio();
    }
}

$mia_macchina = new Fiat('ND 123 OJ ', 'Fiat Panda');
// $mia_macchina->setName('Ciao');
$mia_macchina->telaio_ereditato = 'ciccio';
$mia_macchina->stampaFrase();

//“La mia macchina e' $name, con targa $license e nmero di Telaio $num_telaio“
