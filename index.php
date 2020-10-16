<h1>Uppgift 1</h1>
<h3><?php echo uppgift1("Hello PHP-hell!"); ?></h3>
<h1>Uppgift 2</h1>
<?php echo uppgift2("Hello kitchen!", 1); ?>
<h1>Uppgift 3</h1>
<h3><?php echo eat(); ?></h3>

<?php function uppgift1($message)
{
  return "$message";
}
function uppgift2($message, $headerprop)
{
  return '<h' . $headerprop . '>' . $message . '</h' . $headerprop . '>';
}
class Food
{
  public $name;
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}
function eat()
{
  $macka = new Food();
  $macka->set_name("macka");
  return "Nu åts en " . $macka->get_name();
}
?>