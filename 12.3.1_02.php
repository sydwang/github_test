<?php
    $file_name = "test.txt";
    $fp = fopen($file_name,  'r');
    if ($fp) {
      $data = fread($fp,  filesize($file_name));
      fclose($fp);
      $file_name = "ftp://user:pass@ftp.myserver.com/usr/home/dj/$file_name"; 
      $fp = fopen($file_name,  'wt');
      if ($fp) {
        echo 'Well done!';
        fwrite($fp,  $data);
        fclose($fp);
      }
    }
?>
