<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>MEDINOVA - Hospital Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css?v=<?= $version ?>" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <?php include "asset/navbar0.php" ?>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <?php include "asset/navbar.php" ?>
  <!-- Navbar End -->

  <!-- Hero Start -->
  <div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
      <div class="row justify-content-start">
        <div class="col-lg-12 text-center text-lg-center">

          <h2 class="display-9 text-white ">Vous Aimez Votre Animal : Assurez-Le !
          </h2>

          <strong class=" text-white ">Votre animal de compagnie fait partie de votre famille. <br>Vous l'aimez et vous désirez le voir,
            en pleine forme et heureux.

        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Datadome -->

  <!-- end -->

  <div class="siteWrapper">
    <div id="header" class="fullLayout header"></div>

    <div class="fullLayout fullLayout--greyBackground">
      <div class="primary">
        <article class="card">
          <div class="post_content wysiwyg"></div>

          <div comparateur="comparateur/assurance-animaux-1642079815278" utm_source="LELYNX" utm_campaign="animaux_lelynx" utm_term="nothing" utm_medium="partenariat" site_identifier="lyx" code="PARTANILYNX" applicationconfiguration="[object Object]">
            <div data-v-05100ca8="">
              <!----><!----><iframe data-v-05100ca8="" id="iframeProvider" src="https://app.hyperassur.com/comparateur/assurance-animaux-1642079815278/?at_source=LELYNX&amp;at_campaign=animaux_lelynx&amp;at_medium=partenariat" name="c55u2d" width="100%" scrolling="no" data-hj-allow-iframe="true" style="min-height: 500px; overflow: hidden; height: 932px"></iframe>
            </div>
          </div>

          <script>
            var iframeElement = document.querySelector("#LELYNX");

            if (window.location.href.indexOf("utm_medium=cpc") > -1) {
              iframeElement.setAttribute("data-code", "PARTANILYNX2");
            } else {
              iframeElement.setAttribute("data-code", "PARTANILYNX");
            }
          </script>
        </article>
      </div>
    </div>
    <!--assurance redaction Start-->

    <?php include "asset/mission.php" ?>


    <div>
      <div class="container-fluid row text-center" style="background-color: #EBEBEB;">

        <h2 class="wow fadeInLeft">Pourquoi nous faire confiance ?</h2>
        <div class="col-lg-3">
          <img src="img/economie_garantie.jpg">
        </div>
        <div class="col-lg-3">
          <img src="img/offre_sans_engagement.jpg">
        </div>
        <div class="col-lg-3">
          <img src="img/offre.png">
        </div>
        <div class="col-lg-3">
          <img src="img/offre hand.png">
        </div>
      </div>
    </div>



    <div class="row-lg text-center">
      <div class="col-lg-3">
        <h1>Assurance animaux</h1>
        <h3>Vous aimez votre animal : Assurez-le !</h3>

        <p>Votre animal de compagnie fait partie de votre famille. Vous l’aimez et vous désirez le voir, en pleine forme et heureux. Être en bonne santé fait partie de vos préoccupations, autant en termes de prévention que de soins curatifs.</p>

      </div>
      <div class="col-lg-3">

        <h3>Une prise en charge des frais de santé :</h3>
        <p>Une maladie, une blessure, une infection, des troubles neurologiques… Votre animal peut tomber malade et avoir besoin d’être amené à un cabinet vétérinaire en toute urgence. Ces frais médicaux peuvent être onéreux, c’est pour cette raison que souscrire une assurance, vous permet de couvrir les frais du vétérinaire de manière partielle ou totale, selon la formule d’assurance choisie.</p>
      </div>


    </div>

  </div>
  <?php include "asset/exp.php" ?>
  <!--assurance redaction End-->
  <?php include "asset/mission.php" ?>


  <!-- Footer Start -->
  <?php include "asset/footer.php" ?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  <script>
    !(function(a, b, c, d, e, f) {
      a.ddjskey = e;
      a.ddoptions = f || null;
      var m = b.createElement(c),
        n = b.getElementsByTagName(c)[0];
      (m.async = 1), (m.src = d), n.parentNode.insertBefore(m, n);
    })(
      window,
      document,
      "script",
      "https://js.datadome.co/tags.js",
      "6FBBF5E58E40237BACA4E18F57135E", {
        ajaxListenerPath: true
      }
    );
  </script>
  <!-- Template Javascript -->
  <script src="js/main.js?v=<?= $version ?>"></script>
</body>

</html>