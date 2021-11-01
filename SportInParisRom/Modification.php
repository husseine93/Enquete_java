<?php
$file = new SplFileObject("atp_wta.csv", "a"); 
$file->fputcsv(array($_COOKIE['_nom'],$_COOKIE['age'],$_COOKIE['genre'],$_COOKIE['moyenne'])); 
$file = null; 
?>