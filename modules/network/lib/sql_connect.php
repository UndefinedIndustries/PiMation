<?php



  $username = "root";
  $password ="gtech";
  $hostname = "localhost";
  $dbname = "Computers";
  $dbhandle = mysqli_connect($hostname, $username, $password, $dbname) or die ("Could not connect");



    if(isset($_POST['user']) || isset($_POST['pass'])) {
      $user = $_POST['user'];
      $pass = $_POST['pass'];
        $query = mysqli_query($dbhandle, "SELECT * FROM list WHERE name='$user' OR ip='$pass'");
        if(mysqli_num_rows($query) > 0 ) { //check if there is already an entry for that username
          echo "Computer already exists!";
          header("refresh:1;url=./");
        }else{
          mysqli_query($dbhandle, "INSERT INTO list (name, ip) VALUES ('$user', '$pass')");

          echo "Computer created!";
          header("refresh:1;url=./");
        }
      }


?>
