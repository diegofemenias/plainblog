<?php 

$db = new SQLite3('data.db');
$db->exec('pragma synchronous = off;');