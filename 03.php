<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
unset( $_SESSION['name'] );
unset( $_SESSION['idade'] );
unset( $_SESSION['filme'] );
session_destroy();
echo "Session deleted";
?>

</body>
</html>