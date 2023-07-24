<?php
require 'db.php';
$email = ($_POST['email']);
$password = $_POST['password'];
if (empty($email)) {
    $errorMsg = "please enter email";
} else if (empty($password)) {
    $errorMsg = "please enter password";
} else {
    try {
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql) or die($conn->errorInfo()[2]);
        $ligne = $result->fetchObject();
        $num = $result->rowCount();
        if ($num > 0) {
            session_start();
            $_SESSION["email"] = "$email";
            header("location: index.php");
        } else {
            $errorMsg = "wrong name or password";
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
echo $errorMsg;
