<?php
session_start();
if (isset($_SESSION['email'])) {
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM energie WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: energie.php");
}
 } else
  header("location: login_interface.php");

?>