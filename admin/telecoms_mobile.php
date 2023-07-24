<?php
session_start();
if (isset($_SESSION['email'])) {


?>


  <?php
  require 'db.php';
  $sql = 'SELECT * FROM telecoms_mobile';
  $statement = $conn->prepare($sql);
  $statement->execute();
  $fournisseurs = $statement->fetchAll(PDO::FETCH_OBJ);
  ?>
  <?php require 'header_telecoms_mobile.php'; ?>
  <div class="container bg-white">
    <div class=" mt-5">
      <div class="card-header">
        <h2>All fournisseur</h2>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>opérateur</th>
            <th>nom de l'offre</th>
            <th>debit</th>
            <th>prix</th>
            <th>contact</th>
          </tr>
          <?php foreach ($fournisseurs as $fournisseur) : ?>
            <tr>

              <td><img src="<?php echo $fournisseur->data; ?>" style="width:100%;
    max-width:250px;"></td>
              <td><?= $fournisseur->nom_offre; ?></td>
              <td><?= $fournisseur->debit; ?></td>
              <td><?= $fournisseur->prix; ?></td>
              <td><?= $fournisseur->contact; ?></td>
              <td>
                <a href="edit_telecoms_mobile.php?id=<?= $fournisseur->id ?>" class="btn btn-info">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_telecoms_mobile.php?id=<?= $fournisseur->id ?>" class='btn btn-danger'>Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
<?php require 'footer.php';
} else
  header("location: login_interface.php");

?>