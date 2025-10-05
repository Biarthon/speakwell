<?php

$db_name = 'mysql:host=db.pxxl.pro;port=19714;dbname=db_qccb4ece';
$user_name = 'user_debb6595';
$user_password = '3e5a2c9efb3c55500570857da6f113a0'; // use the full password from your panel

try {
   $conn = new PDO($db_name, $user_name, $user_password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
   die(); // Handle connection failure appropriately for your application
}

function unique_id() {
   $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
   $rand = array();
   $length = strlen($str) - 1;
   for ($i = 0; $i < 20; $i++) {
       $n = mt_rand(0, $length);
       $rand[] = $str[$n];
   }
   return implode($rand);
}

?>
