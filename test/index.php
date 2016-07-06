<?php

require_once '../config.php';

$sth = $db->prepare("select * from information_schema.tables");
$sth->execute();
$result = $sth->fetchAll();

var_dump($result);
