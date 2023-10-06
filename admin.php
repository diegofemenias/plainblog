<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location:login.php");
} else {
    echo "<a href='logout.php'>Salir</a>";

    echo "lala";
}
?>

