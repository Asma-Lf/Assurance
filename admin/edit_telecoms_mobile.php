<?php
session_start();
if (isset($_SESSION['email'])) {


?>
<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM telecoms_mobile WHERE id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id]);
$fournisseur = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['nom_offre'])  && isset($_POST['debit']) && isset ($_FILES["image"]) && $_FILES["image"]["error"] == 0)  {

  $nom_offre = $_POST['nom_offre'];
  $debit = $_POST['debit'];
  $prix = $_POST['prix'];
  $contact = $_POST['contact'];
  $target_dir = "../image_upload/";

  // Get image info
  $file_name = basename($_FILES["image"]["name"]);
  $file_type = pathinfo($target_dir . $file_name, PATHINFO_EXTENSION);
  $file_size = $_FILES["image"]["size"];
  $file_temp = $_FILES["image"]["tmp_name"];

  // Check file type
  if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif") {
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
  } else {

    // Set target file path
    $target_file = $target_dir . $file_name;

    // Move file to target directory
    move_uploaded_file($file_temp, $target_file);

    // Prepare SQL statement
    $sql = 'UPDATE telecoms_mobile SET nom_offre=:nom_offre, debit=:debit,prix=:prix,contact=:contact,name=:name ,size=:size ,data=:data ,type=:type  WHERE id=:id';
    $statement = $conn->prepare($sql);


    if ($statement->execute([':nom_offre' => $nom_offre, ':debit' => $debit, ':prix' => $prix, ':contact' => $contact, ':name' => $file_name, ':size' => $file_size, ':data' => $target_file, ':type' => $file_type,':id' => $id])) {
      $message = 'data inserted successfully';
    }

    // Check if image was inserted successfully
    if ($statement->rowCount() > 0) {
      echo "Image uploaded successfully.";
      header("Location: telecoms_mobile.php");
    } else {
      echo " error uploading image.";
    }
  }

  // Close connection
  $conn = null;
}







?>
<?php require 'header_telecoms_mobile.php'; ?>
<div class="container bg-white">
  <div class=" mt-5">
    <div class="">
      <h2>Update offre</h2>
    </div>
    <div class="card-body">
      <?php if (!empty($message)) : ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nom">nom offre</label>
          <input value="<?= $fournisseur->nom_offre; ?>" type="text" name="nom_offre" id="nom_offre" class="form-control">
        </div>
        <div class="form-group">
          <label for="debit">debit</label>
          <input value="<?= $fournisseur->debit; ?>" type="text" name="debit" id="debit" class="form-control">
        </div>
        <div class="form-group">
          <label for="prix">prix</label>
          <input value="<?= $fournisseur->prix; ?>" type="text" name="prix" id="prix" class="form-control">
        </div>
        <div class="form-group">
          <label for="contact">contact</label>
          <input value="<?= $fournisseur->contact; ?>" type="text" name="contact" id="contact" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Select image:</label>
          <input type="file" name="image" id="image">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; } else
  header("location: login_interface.php");

?>