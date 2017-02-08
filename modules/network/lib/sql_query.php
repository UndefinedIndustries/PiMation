<?php // open a php tag

$a = '0';
$servername = "localhost";
$username = "root";
$password = "gtech";
$dbname = "Computers";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT * FROM `list`"; // select only the username field from the table "users_table"
$result = mysqli_query($conn, $sql); // process the query

$username_array = array(); // start an array

while($row = mysqli_fetch_array($result)){ // cycle through each record returned
$username_array[] = "\"".$row['name']."\""; // get the username field and add to the array above with surrounding quotes
$ip_array[] = "\"".$row['ip']."\"";
$name = trim($username_array[$a],'"');
$ip = trim($ip_array[$a],'"');

?>
