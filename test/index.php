<?php

require_once '../config.php';

$tables = $db->query("select * from information_schema.tables");

var_dump($tables);
