<?php
include("db.php");

// Deja todo en cero
$db->exec("DROP TABLE categories; DROP TABLE posts; DROP TABLE users;");

$db->exec("CREATE TABLE categories (id INTEGER PRIMARY KEY, title VARCHAR)");
$db->exec("CREATE TABLE posts (id INTEGER PRIMARY KEY, id_category INTEGER, title VARCHAR, body VARCHAR)");
$db->exec("CREATE TABLE users (user VARCHAR PRIMARY KEY, password VARCHAR)");


$db->exec("INSERT INTO categories (title) VALUES ('Categoría 1')");
$db->exec("INSERT INTO categories (title) VALUES ('Categoría 2')");
$db->exec("INSERT INTO categories (title) VALUES ('Categoría 3')");
$db->exec("INSERT INTO categories (title) VALUES ('Categoría 4')");

$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('1','Título 1', 'Body 1');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('2','Título 2', 'Body 2');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('3','Título 3', 'Body 3');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('4','Título 4', 'Body 4');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('1','Título 5', 'Body 5');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('2','Título 6', 'Body 6');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('3','Título 7', 'Body 7');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('4','Título 8', 'Body 8');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('1','Título 9', 'Body 9');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('2','Título 10', 'Body 10');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('3','Título 11', 'Body 11');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('4','Título 12', 'Body 12');");
$db->exec("INSERT INTO posts (id_category,title,body) VALUES ('1','Título 13', 'Body 13');");

$db->exec("INSERT INTO users (user,password) VALUES ('admin','b89f77ba5abe1adab20132a352c72fc3')");

