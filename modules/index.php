<?php
  $files = glob('modules/*/index.php');
  asort($files, SORT_STRING);
  $a=0;
  foreach($files as $file){
    $name = exec("cat ".$file.".name.dat");
?>
<br/>
<br/>
<a href="<?php echo $file ?>" style="
text-decoration: none;color: #fff;font-family: Arial;font-size: 4em;
  ">&nbsp<?php echo $name ?></a>
<?php
  }
?>
<br/>
