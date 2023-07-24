<?php
session_start();
if (isset($_SESSION['email'])) {


?>
<?php
require 'db.php';
$message = '';

if (isset($_POST['nom'])  && isset($_POST['prix_an']) && isset ($_FILES["image"]) && $_FILES["image"]["error"] == 0)  {

  $nom = $_POST['nom'];
  $prix_an = $_POST['prix_an'];
  $prix_abonnement_annuel = $_POST['prix_abonnement_annuel'];
  $prix_kwh = $_POST['prix_kwh'];
  $contact = $_POST['contact'];
  $target_dir = "../image_upload/";

    // Get image info
    $file_name = basename($_FILES["image"]["name"]);
    $file_type = pathinfo($target_dir . $file_name, PATHINFO_EXTENSION);
    $file_size = $_FILES["image"]["size"];
    $file_temp = $_FILES["image"]["tmp_name"];

    // Check file type
    if($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif") {
      echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    } else {

      // Set target file path
      $target_file = $target_dir . $file_name;

      // Move file to target directory
      move_uploaded_file($file_temp, $target_file);

      // Prepare SQL statement
      $sql = "INSERT INTO energie (nom, prix_an,prix_abonnement_annuel,prix_kwh,contact,name, type, size, data)
              VALUES (:nom, :prix_an,:prix_abonnement_annuel,:prix_kwh,:contact,:name, :type, :size, :data)";
      $statement = $conn->prepare($sql);
    

      if ($statement->execute([':nom' => $nom, ':prix_an' => $prix_an , ':prix_abonnement_annuel' => $prix_abonnement_annuel, ':prix_kwh' => $prix_kwh,':contact'=>$contact, ':name' => $file_name, ':size' => $file_size, ':data' => $target_file, ':type' => $file_type])) {
        $message = 'data inserted successfully';
      }

      // Check if image was inserted successfully
      if ($statement->rowCount() > 0) {
        echo "Image uploaded successfully.";
        header("Location: energie.php");
      } else {
        echo " uploading image.";
      }
    }

    // Close connection
    $conn = null;
} 



?>
<?php require 'header_energie.php'; ?>
<div class="container bg-white">
  <div class=" mt-5">
    <div class="">
      <h2>Create energie fournisseur</h2>
    </div>
    <div class="card-body">
      <?php if (!empty($message)) : ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nom">nom</label>
          <input type="text" name="nom" id="nom" class="form-control">
        </div>
        <div class="form-group">
          <label for="prix_an">prix par an</label>
          <input type="text" name="prix_an" id="prix_an" class="form-control">
        </div>
        <div class="form-group">
          <label for="prix_abonnement_annuel">prix abonnement annuel</label>
          <input type="text" name="prix_abonnement_annuel" id="prix_abonnement_annuel" class="form-control">
        </div>
        <div class="form-group">
          <label for="prix_kwh">prix par kwh</label>
          <input type="text" name="prix_kwh" id="prix_kwh" class="form-control">
        </div>
        <div class="form-group">
          <label for="contact">contact</label>
          <input type="text" name="contact" id="contact" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Select image:</label>
          <input type="file" name="image" id="image">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Create energie fournisseur</button>
        </div>

      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; } else
  header("location: login_interface.php");

?>