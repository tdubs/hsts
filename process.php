<?php
 $req_dump = $_POST['data'];

 $fp = fopen('out.txt', 'a');
 fwrite($fp, $req_dump);
 fclose($fp);
?>
