<?php
  $files = glob('modules/*/index.php');
  asort($files, SORT_STRING);
  $a=0;
  foreach($files as $file){
    $name = exec("cat ".$file.".name.dat");
    ++$a;
?>
<br>
<a href="<?php echo $file ?>" class="w3-bar-item w3-button" style="
text-decoration: none;
  ">&nbsp<?php echo $name ?></a>
<?php
  }
?>
<br/>
