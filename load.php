<?php
include("db.php");

// Deja todo en cero
$db->exec("DROP TABLE categories; DROP TABLE posts; DROP TABLE users;");

$db->exec("CREATE TABLE categories (id INTEGER PRIMARY KEY, title VARCHAR)");
$db->exec("CREATE TABLE posts (id INTEGER PRIMARY KEY, id_category INTEGER, title VARCHAR, body VARCHAR, slug VARCHAR UNIQUE)");
$db->exec("CREATE INDEX id_category ON posts (id_category)");
$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, user VARCHAR UNIQUE, password VARCHAR)");

$db->exec("INSERT INTO categories (title) VALUES ('Categoría 1')");
$db->exec("INSERT INTO categories (title) VALUES ('Categoría 2')");
$db->exec("INSERT INTO categories (title) VALUES ('Categoría 3')");
$db->exec("INSERT INTO categories (title) VALUES ('Categoría 4')");

$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('1','Título 1', '<b>Lorem ipsum</b> dólor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. FIN', 'tit1');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('1','Título 2', 'Segundo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. FIN', 'tit2');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('3','Título 3', 'Body 3', 'tit3');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('4','Título 4', 'Body 4', 'tit4');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('1','Título 5', 'Body 5', 'tit5');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('2','Título 6', 'Body 6', 'tit6');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('3','Título 7', 'Body 7', 'tit7');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('4','Título 8', 'Body 8', 'tit8');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('1','Título 9', 'Body 9', 'tit9');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('2','Título 10', 'Body 10', 'tit10');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('3','Título 11', 'Body 11', 'tit11');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('4','Título 12', 'Body 12', 'tit12');");
$db->exec("INSERT INTO posts (id_category,title,body,slug) VALUES ('1','Título 13', 'Body 13', 'tit13');");

$db->exec("INSERT INTO users (id, user,password) VALUES (1, 'admin','b89f77ba5abe1adab20132a352c72fc3')");

