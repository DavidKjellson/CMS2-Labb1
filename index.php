<?php

// Uppgift 4-6

class Food
{
  public $name;
  function __construct($name)
  {
    $this->name = $name;
  }
  public function eat()
  {
    echo "Nu åts en " . $this->name . ".";
  }
}
class Sandwich extends Food
{
  // private $ingredients = ["butter", "cheese", "ham", "mustard", "ketchup", "banana", "beef", "chicken", "prawn", "snail", "fish", "lettuce", "tomato", "vegemite"];
  private $options;
  public function eat()
  {
    echo 'Nu åts en ' . $this->name . ' som innehåller: <br>';
    echo '<ul>';
    foreach ($this->options as $key => $value) {
      echo '<li>' . $value . ' ' . $key . '</li>';
    }
    echo '</ul>';
  }
  public function __construct($name)
  {
    $this->name = $name;
  }
  function set_options($options)
  {
    $this->options = $options;
  }
}
$regular = new Sandwich('vanlig macka');
$nasty = new Sandwich('vidrig macka');
$vego = new Sandwich('vegansk maska');

$regular->set_options(["butter" => 1, "cheese" => 2, "ham" => 2, "lettuce" => 1, "tomato" => 2]);
$nasty->set_options(["ketchup" => 1, "banana" => 1, "snail" => 3, "vegemite" => 1]);
$vego->set_options(["mustard" => 1, "ketchup" => 1, "banana" => 1, "lettuce" => 1, "tomato" => 2]);

$regular->eat();
$nasty->eat();
$vego->eat();
