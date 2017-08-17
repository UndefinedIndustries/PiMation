<?php 
$cookiename = "loggedin";
    $servername = "localhost"; //server ip for sql
    $username   = "root"; //server username
    $password   = "root"; //server password
    $dbname     = "SQLSprinkler"; //database name
      $conn = mysqli_connect(
        $servername,$username,$password,$dbname
      );
if(isset($_POST)){
          $myusername = $_POST['username'];
          $mypassword = $_POST['password'];
          $query = "SELECT * FROM Users WHERE Username='$myusername' and Password='$mypassword'";
          $result = mysqli_query($conn, $query);
          $count = mysqli_num_rows($result);

          if($count == 1){
              echo "Login sucessfull. Welcome ".$myusername."!";
              setcookie($cookiename, $myusername, time() + (86400 * 30), "/");
              header("Location: /");
          }else{
              echo "Invalid username or password";
          }

}
if(isset($_POST['url'])){
    $url = $_POST['url'];
    if($url ==""){
        header("Location: /");
    }else{
        header("Location: ".$url);
    }
}
?>