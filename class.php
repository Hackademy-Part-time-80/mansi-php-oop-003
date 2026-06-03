<?php


abstract class Category
{
    abstract public function getName();
}

class Antipasti extends Category
{
    public function getName()
    {
        return 'I nostri Antipasti';
    }
}

class Primi extends Category
{
    public function getName()
    {
        return 'Primi piatti gustosi';
    }
}

class Secondi extends Category
{
    public function getName()
    {
        return 'Idee per Secondi Fantasiosi';
    }
}
