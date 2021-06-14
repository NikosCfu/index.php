 
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<body>
<?php



if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 1;
} else {
  $_SESSION['count']++;
}

echo "You have visited this page " . $_SESSION['count'] . " times before you closed your browser";


?>

</body>
</html>

