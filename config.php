<?php

$username = getenv('CLEARDB_DATABASE_USERNAME');
$password = getenv('CLEARDB_DATABASE_PASSWORD');

// localhost
if (!$username || !$password) {
  $username = 'root';
  $password = 'bo123456';
}

define('DATABASE_USERNAME', $username);
define('DATABASE_PASSWORD', $password);
