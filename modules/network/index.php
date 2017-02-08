<style>
*{
  font-family: sans-serif;
}
</style>
<center>
<?php

  /*OVER ALL TODO:
    - ADD WAKE ON LAN COMMAND FOR OFFLINE DEVICES
    - ADD SHUTDOWN COMMAND(PLAUSIBLE? ADD USER/PASS FIELD...)
    - FIND BUGS AND SQUISH
  */
?>



<?php
include 'lib/sql_connect.php'; //library for connecting

?>
<center>
<form action="index.php" method="POST">
  <p>Computer Name: </p><input type="text" name="user" />
  <p>Computer Address: </p><input type="text" name="pass" />
  <br/>
  <br/>
  <input type="submit" value="Add" />
</form>
</center>
<div id="table">
<?php include 'lib/table.php'; ?>
</div>
</html>
<script src="/js/1jquery.js"></script><!-- Baisc javascript library, if you don't have it, find it -->
<script>

setInterval(function () {
    $("#table").load("lib/table.php");
}, 5000);
</script>
