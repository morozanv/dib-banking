<? include ("config.php");
if (isset($_POST['text']))
{
$submit = $_POST['text'];
}

if (isset($_POST['search']))
{
$search = $_POST['search'];
}

if (isset($submit))
{

if (empty($search) or strlen($search) < 4)
{
exit ("<p>Nu ati introdus produsul cautat sau este mai mic de 4 simboluri</p>");
}

$search = trim($search);
$search = stripslashes($search);
$search = htmlspecialchars($search);

}
else 
{
  include("error.php");
  exit();  
}

?>
