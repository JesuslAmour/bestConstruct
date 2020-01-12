<?php
  $dbname = 'bestconstruct';
  $host = 'localhost';
  $dbuser = 'root';
  $dbpassword = '';


  $db = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpassword);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
