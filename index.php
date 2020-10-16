<h1>Uppgift 1</h1>
<h3><?php echo uppgift1("Hello world!"); ?></h3>
<h1>Uppgift 2</h1>
<?php echo uppgift2("Hello kitchen!", 1); ?>

<?php function uppgift1($message)
{
  return "$message";
}
function uppgift2($message, $headerprop)
{
  return '<h' . $headerprop . '>' . $message . '</h' . $headerprop . '>';
}
?>