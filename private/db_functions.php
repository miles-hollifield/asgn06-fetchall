<?php

function db_connect() {
    try {
        $connection = new PDO('mysql:host='.DB_SERVER.'; dbname='.DB_NAME, DB_USER, DB_PASS); 
        return $connection;
    }
    
    catch(Exception $e) {
        echo $e->getMessage();
    }
    
}

function db_disconnect($connection) {
  if(isset($connection)) {
    $connection = null;
  }
}

// Kevin Skoglund's code
//function db_connect() {
//  $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
//  confirm_db_connect($connection);
//  return $connection;
//}
//
//function confirm_db_connect($connection) {
//  if($connection->connect_errno) {
//    $msg = "Database connection failed:";
//    $msg .= $connection->connect_error;
//    $msg .= " (" . $connection->connect_error . ")";
//    exit($msg);
//  }
//}

