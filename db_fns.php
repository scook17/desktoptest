<?php

function db_connect() {
   $result = new mysqli('localhost', 'sandi', 'password', 'sctest1');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
