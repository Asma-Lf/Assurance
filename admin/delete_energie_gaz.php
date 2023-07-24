<?php
session_start();
if (isset($_SESSION['email'])) {
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM energie_gaz WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: energie_gaz.php");
}
 } else
  header("location: login_interface.php");

?>