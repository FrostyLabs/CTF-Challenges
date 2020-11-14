<?php

/**
  * Configuration for database connection
  *
  */

$host       = "localhost";
$username   = "entryUser"; // edit this where you need
$password   = "1234"; // edit this where you need
$dbname     = "guestbook"; // edit this where you need
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
