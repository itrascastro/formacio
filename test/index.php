<?php

require_once '../database.php';

$sth = $db->prepare("select * from information_schema.tables");
$sth->execute();
$tables = $sth->fetchAll();

foreach($tables as $table) {
    echo $table['TABLE_NAME'] . '<br />';
}
