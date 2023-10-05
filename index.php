<?php
$db = new SQLite3('prueba.db');
$db->exec('pragma synchronous = off;');