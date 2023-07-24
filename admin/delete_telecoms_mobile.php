<?php
session_start();
if (isset($_SESSION['email'])) {
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM telecoms_mobile WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: telecoms_mobile.php");
}
 } else
  header("location: login_interface.php");

?>