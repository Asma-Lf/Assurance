<?php
session_start();
if (isset($_SESSION['email'])) {


?>


  <?php require 'header_main.php'; ?>
  <div class="container">
    <div class="">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex justify-content-end">
              <h2 class="section-heading" style="color:aliceblue">Nos services</h2>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <div>
                <form action="logout.php">
                <button class="btn btn-lg btn-block" type="submit" style="background-color: #2c7bfe ; color:aliceblue" >Logout</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3 ">
            <a href="energie.php">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fa fa-bolt"></i>
                </div>
                <h3>Energie</h3>
                <p>
                  voir toutes les offres d'assurance
                </p>
              </div>
            </a>
          </div>
          <div class="col-3 ">
            <a href="energie_electrique.php">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fa fa-bolt"></i>
                </div>
                <h3>Energie electrique</h3>
                <p>
                  voir toutes les offres d'assurance
                </p>
              </div>
            </a>
          </div>
          <div class="col-3 ">
            <a href="energie_gaz.php">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fa fa-bolt"></i>
                </div>
                <h3>Energie gaz</h3>
                <p>
                  voir toutes les offres d'assurance
                </p>
              </div>
            </a>
          </div>
          <div class="col-3 ">
            <a href="energie_dualite.php">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fa fa-bolt"></i>
                </div>
                <h3>Energie dualite</h3>
                <p>
                  voir toutes les offres d'assurance
                </p>
              </div>
            </a>
          </div>
          <div class="col-3 ">
            <a href="telecoms.php">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fa fa-tty"></i>
                </div>
                <h3>Telecoms</h3>
                <p>
                  voir toutes les offres d'assurance
                </p>
              </div>
            </a>
          </div>
          <div class="col-3 ">
            <a href="telecoms_mobile.php">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fa fa-tty"></i>
                </div>
                <h3>Telecoms forfaits mobile</h3>
                <p>
                  voir toutes les offres d'assurance
                </p>
              </div>
            </a>
          </div>
          <div class="col-3 ">
            <a href="telecoms_internet.php">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fa fa-tty"></i>
                </div>
                <h3>Telecoms offres internet</h3>
                <p>
                  voir toutes les offres d'assurance
                </p>
              </div>
            </a>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php require 'footer.php';
} else
  header("location: login_interface.php");

?>