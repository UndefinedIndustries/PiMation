<?php
if(isset($_POST['toggle'])) {
exec ('sudo python toggle.py');
header('Location: index.php');
}
 ?>
