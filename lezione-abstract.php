<?php

abstract class Person
{
    public string $firstname;
    public string $lastname;


    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    abstract public function sayHello();

    public function getFirstname()
    {
        return $this->firstname;
    }
}

class Student extends Person
{
    protected float $avg;

    public function setAvg($float)
    {
        return $this->avg = $float;
    }

    public function getAvg()
    {
        return $this->avg;
    }
    public function sayHello()
    {
        echo "Saluta sono uno studente\n";
    }
}

class Teacher extends Person
{

    public function sayHello()
    {
        echo "Saluta sono un insgenante\n";
    }
}

//$esempio1 = new Person('carlo', 'bianchi');
$esempio2 = new Student('dfsdfsd', 'bianchi');
$esempio3 = new Teacher('ddd', 'bianchi');

$esempio2->setAvg('45');
var_dump($esempio2);
//$esempio3->sayHello();
