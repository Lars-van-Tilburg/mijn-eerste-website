<?php
 try {
    $db = new PDO("mysql:localhost=;dbname=van_raam","root","");
 }
 catch (PDOException);
 {
     echo $e;
 }
 ?>
 

