<?php
  $files = glob('modules/*/index.php');
  shuffle($files);
  $a=0;
  foreach($files as $file){
    $name = exec("cat ".$file.".name.dat");
?>
<br/>
<br/>
<a href="<?php echo $file ?>" style="
text-decoration: none;color: #fff;font-family: UB;font-size: 4em;
  ">&nbsp<?php echo $name ?></a>
<?php
  }
?>
<br/>
