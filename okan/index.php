<?php
$okan = $_GET["resim"];

if($okan){
      $file = $okan;

      header('Content-Type: image/jpeg');
      header('Content-Length: ' . filesize($file));
      echo file_get_contents($file);
}
