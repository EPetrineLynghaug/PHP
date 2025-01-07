<!DOCTYPE html>
<html>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="fname">
      <input type="submit">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];  // collect value of input field
    if (empty($name)) {
        echo "<p>Name is empty</p>";
    } else {
        echo "<p>Input is " . $name . "</p>";
    }
}
?>
</body>
</html>