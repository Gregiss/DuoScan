<?php
$table = "users";
try {
     $db = new PDO("mysql:dbname=duoscan;host=localhost", "root", "" );
     $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
     $sql ="CREATE table $table(
     id INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     email VARCHAR( 50 ) NOT NULL, 
     password VARCHAR( 250 ) NOT NULL,
     username VARCHAR( 150 ) NOT NULL, 
     admin INT( 11 ) NOT NULL, 
     banned INT( 11 ) NOT NULL, 
     user_avatar VARCHAR( 100 ) NOT NULL,
     user_background VARCHAR( 50 ) NOT NULL,
     Country VARCHAR( 50 ) NOT NULL);" ;
     $db->exec($sql);

} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}