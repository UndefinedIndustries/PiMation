<?php

session_start(); //STARTS SESSION
  if(!isset($_COOKIE['loggedin'])){ //FIND LOGGED IN COOKIE
    echo "Permission Denied";
    header("refresh:5;url=../"); //IF NOT SET, RETURN TO INDEX
  }
  if($_SESSION['name']!=="elevated"){
    echo "Permission Denied";
    header("refresh:5;url=../");
  }

$computer_name = $_GET['remove'];
$servername = "localhost";
$username = "root";
$password = "gtech";
$dbname = "Computers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['remove'])){
// sql to delete a record
$sql = "DELETE FROM list WHERE name='$computer_name'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
}
if(isset($_GET['edit'])){
?>
<form action="submit.php" method="POST" name="form">
  <p>Computer Name: </p><input type="text" name="name1" value="<?php echo $_GET['name']; ?>"/>
  <p>Computer Address: </p><input type="text" name="ip1" value="<?php echo $_GET['ip']; ?>"/>
  <input type="hidden" name="old_name2" value="<?php echo $_GET['old_name']; ?>" />
  <br/>
  <br/>
  <input type="submit" value="Add" name="test" />
</form>

<?php
}
if(isset($_POST['test'])){
  $new_name = $_POST['name1'];
  $new_ip = $_POST['ip1'];
  $old_name1 = $_POST['old_name2'];
$sql = "UPDATE list SET name='$new_name',  ip='$new_ip' WHERE `list`.`name`='$old_name1'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: .");

} else {
    echo "Error updating record: " . $conn->error;
}
}


$conn->close();
?>


<?php

?>
