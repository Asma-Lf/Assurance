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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet" />

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

<body class="">
    <!-- Topbar Start -->
    <?php include "asset/navbar0.php" ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include "asset/navbar.php" ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid  py-5 hero-header border-cust ">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-center">

                    <h2 class="display-9 text-white ">Simple Et Rapide : Comparez Les Offres De Rachat De Crédit <br>Des
                        Banques En Quelques Clics !
                    </h2>
                    <p class=" text-white "> Ne payez plus vos services trop cher et trouvez les meilleures offres
                    </p>

                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="column">
            <div class="card">

                <h3>Crédit renouvelable</h3>
                <p>Découvrir</p>


            </div>
        </div>
        <div class="column">
            <div class="card">

                <h3>Prêt personnel</h3>
                <p>Découvrir</p>
            </div>
        </div>
        <div class="column">
            <div class="card">

                <h3>Prêt travaux</h3>
                <p>Découvrir</p>
            </div>
        </div>
        <div class="column">
            <div class="card">

                <h3>Crédit immobilier​</h3>
                <p>Découvrir</p>
            </div>
        </div>
        <div class="column">
            <div class="card">

                <h3>Crédit consommation</h3>
                <p>Découvrir</p>
            </div>
        </div>
        <div class="column">
            <div class="card">

                <h3>Crédit auto</h3>
                <p>Découvrir</p>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h3 class="elementor-heading-title elementor-size-default">Rachat de crédit</h3>
                <h2 class="display-6">COMMENT FONCTIONNE LE RACHAT DE CRÉDIT ?</h2>

                <div class="elementor-widget-container">
                    <p><span style="font-weight: 400;">En effet, si vous avez plusieurs crédits à rembourser, le montant
                            de vos remboursements mensuels peut être difficile à supporter financièrement. Le rachat de
                            crédit est un moyen de maîtriser votre budget en regroupant tous vos prêts et crédits en un
                            seul. </p>
                    <p><span style="font-weight: 400;">Une situation simplifiée : plus besoin de surveiller votre compte
                            en banque plusieurs fois par mois, car il n’y a plus qu’une seule mensualité, débitée en une
                            fois. Vous ne payez plus qu’un seul crédit, à un seul organisme. Votre compte courant est
                            donc plus facile à gérer. </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Blog End -->
    <?php include "asset/mission.php" ?>
    <?php include "asset/exp.php" ?>


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

    <!-- Template Javascript -->
    <script src="js/main.js?v=<?= $version ?>"></script>
</body>

</html>