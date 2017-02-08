<table style="width: 500px;text-align:center;">
<tr>
  <th>Computer Name</th>
  <th>Computer Address</th>
  <th>Actions</th>
</tr>

<?php

//logic goes here
function check_ip($ip_string){
  exec("ping -c 1 -W 2 ".$ip_string, $output, $ip_result);
  if($ip_result==0){echo 'background-color: green;color: #fff;'; $on="1";}else{echo 'background-color: red'; $on="0";}

}



$a          = '0'; // variable for counting
$servername = "localhost"; //server ip for sql
$username   = "root"; //server username
$password   = "gtech"; //server password
$dbname     = "Computers"; //database name
$conn       = mysqli_connect($servername, $username, $password, $dbname); //connect to sql database with all parameters

$sql    = "SELECT * FROM `list`"; // select only the username field from the table "users_table"
$result = mysqli_query($conn, $sql); // process the query
$username_array = array(); // start an array
while ($row = mysqli_fetch_array($result)) // cycle through each record returned
  {
    $username_array[] = "\"" . $row['name'] . "\""; // get the username field and add to the array above with surrounding quotes
    $ip_array[]       = "\"" . $row['ip'] . "\""; // get the ip field and add to the array
    $name             = trim($username_array[$a], '"'); //trim " " from username
    $ip               = trim($ip_array[$a], '"'); //trim " " from ip
?>
<tr>
  <td style="border: 1px solid #000;"><?php
    echo $name; //echos the computers name
?></td>
  <td style="<?php
    check_ip($ip); // runs the function check_ip with inline variable of $ip
?>;border: 1px solid #000;"><?php
    echo $ip;

     //echos ip
?></td>
  <td style="border: 1px solid #000;"><a style="text-decoration: none;" href="submit.php?remove=<?php
    echo $name; //echos name for removal link
?>">Remove</a>&nbsp<a style="text-decoration: none;" href="submit.php?edit&name=<?php
    echo $name; //echos name for edit link
?>&ip=<?php
    echo $ip; //echos ip for edit link
?>&old_name=<?php
    echo $name; // echos ame for edit link
?>"> Edit</a></td>
</tr>
<?php
//this is random.. but needed.
    $a += 1;
  }
//
?>
</table>
