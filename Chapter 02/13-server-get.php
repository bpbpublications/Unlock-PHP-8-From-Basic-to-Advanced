<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    echo "Hello, $name!";
}
?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <input type="submit">
</form>
