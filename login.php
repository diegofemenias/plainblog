<?php
include("db.php");

session_start();
$message = "";
if (count($_POST) > 0) {
    $sql = "SELECT * FROM users WHERE user = '" . $_POST["user_name"] . "' AND password = '" . md5($_POST["password"]) . "'";
    $res = $db->query($sql);
    while ($row = $res->fetchArray()) {
        if (is_array($row)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['user'];
        } else {
            $message = "Invalid Username or Password!";
        }
    }
}

if (isset($_SESSION["id"])) {
    header("Location:admin.php");
}
?>
<html>

<head>
    <title>Ingresar</title>
</head>

<body>
    <form name="frmUser" method="post" action="" align="center">
        <div class="message">
            <?php if ($message != "") {
                echo $message;
            } ?>
        </div>
        Usuario:<br>
        <input type="text" name="user_name">
        <br>
        Password:<br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Enviar">
        <input type="reset">
    </form>
</body>

</html>