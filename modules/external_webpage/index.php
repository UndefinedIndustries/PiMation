<?php
   include_once ('../headers.php');
   include_once ('index.ini.php');
   $link = $proto."://".$server."/".$dir ;
?>
<style>*{margin: 0px;border:0px;}</style>
<iframe src="<?php echo $link ?>" height="100%" width="100%"> </iframe>
