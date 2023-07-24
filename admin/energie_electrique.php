<?php
session_start();
if (isset($_SESSION['email'])) {


?>
<?php
require 'db.php';
$sql = 'SELECT * FROM energie_electrique';
$statement = $conn->prepare($sql);
$statement->execute();
$fournisseurs = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<?php require 'header_energie_electrique.php'; ?>
<div class="container bg-white">
  <div class=" mt-5">
    <div class="card-header">
      <h2>All fournisseur</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>fournisseur</th>
          <th>nom</th>
          <th>prix_an</th>
          <th>prix_abonnement_annuel</th>
          <th>prix_kwh</th>
          <th>contact</th>
        </tr>
        <?php foreach ($fournisseurs as $fournisseur) : ?>
          <tr>

            <td><img src="<?php echo $fournisseur->data; ?>" style="width:100%;
    max-height:150px;"></td>
            <td><?= $fournisseur->nom; ?></td>
            <td><?= $fournisseur->prix_an; ?></td>
            <td><?= $fournisseur->prix_abonnement_annuel; ?></td>
            <td><?= $fournisseur->prix_kwh; ?></td>
            <td><?= $fournisseur->contact; ?></td>
            <td>
              <a href="edit_energie_electrique.php?id=<?= $fournisseur->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_energie_electrique.php?id=<?= $fournisseur->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; } else
  header("location: login_interface.php");

?>