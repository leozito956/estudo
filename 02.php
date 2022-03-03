<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "My name is " . $_SESSION["name"] . ".<br>";
echo "My age is " . $_SESSION["idade"] . ".<br>";
echo "My favorite movie is " . $_SESSION["filme"] . ".";
?>

</body>
</html>