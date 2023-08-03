<?php


echo ("Config file reach");

   require '/vendor/autoload.php';


   $db = new \PDO('mysql:dbname=auth;host=localhost:3306;charset=utf8mb4', 'admin', 'password');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $auth = new \Delight\Auth\Auth($db);
?>