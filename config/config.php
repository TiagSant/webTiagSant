<?php
   $db = new \PDO('mysql:dbname=Auth;host=localhost:3306;charset=utf8mb4', 'admin', 'password');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $auth = new \Delight\Auth\Auth($db);
?>