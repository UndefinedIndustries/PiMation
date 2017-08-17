<?php
    $a = 0;
    $cookiename="loggedin";
          if(!isset($_COOKIE[$cookiename])) {
            
            } else {
                header("Location: ./");
            }

?>
<header>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </header>
        <body class="w3-display-container w3-black">
<form action="login_submit.php" method="post">
    <div style="width:350px;padding: 16px;" class="w3-blue w3-padding-16 w3-card w3-display-middle">
    <span style="float:left;">Username:</span><input  style="float:right" type="text" width="25" name="username"></input><br/><br>
    <span style="float:left;">Password:</span><input style="float:right" type="password" width="25" name="password"></input><br/>
    <input type="hidden" name="url" value=<?php echo $_GET['url']; ?>></input>
    <br>
    <input type="submit" value="Log in" class="w3-green w3-card" style="border: 0px solid;"></input>
</div>
</form>
</body>
<?php 


 ?>