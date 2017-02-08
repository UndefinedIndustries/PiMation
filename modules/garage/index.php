<?php
include_once '../headers.php';
 ?>
 <center>
<br/>
<p class="label" style="margin-right: 15px;">Open/Close Garage Door</p>
<form  action="submit.php" method="post">
  <?php
    echo '<button name="toggle" value="garage" class="btnoff" id="f-btngarage">Toggle Garage</button><br/>';
  ?>
</form>
