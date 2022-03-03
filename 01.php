<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Leonardo Pereira Ramos ";
$_SESSION["idade"] = "17";
$_SESSION["filme"] = "Howl's Moving Castle";
echo "Session variables are set.";
?>

</body>
</html>