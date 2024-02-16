<?php

$users = array(
    "admi_1" => "1234",
    "admi_2" => "1234",
    "admi_3" => "1234"
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$user]) && $users[$user] === $password) {
        session_start();
        $_SESSION["username"] = $user;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Username or password incorrect.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=form.php'>";
        exit();
    }
}
?>

