<?php
trait Life
{
    public function run()
    {
        echo "Sto correndo molto forte\n";
    }
}

abstract class Person
{
    use Life;
}

class Studente extends Person
{

    public function sayHello()
    {
        echo "Saluta, sono uno studente \n";
    }
}


abstract class Animal
{
    use Life;
}
class Dog extends Animal
{
    public function sayHello()
    {
        echo "Abbaia \n";
    }
}

$cane = new Dog();
$tizio = new Studente();

$cane->run();
$tizio->run();
