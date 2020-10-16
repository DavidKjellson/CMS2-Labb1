<?php
class Food
{
  public $name;
  public function eat()
  {
    echo "Nu åts en " . $this->name . ".";
  }
}
class Sandwich extends Food
{
  public $mackname;
}
$macka = new Sandwich();
$macka->name = 'macka';
$macka->eat();
